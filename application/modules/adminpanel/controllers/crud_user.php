<?php

class crud_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library(['session', 'ion_auth', 'form_validation', 'general']);
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        if ( !$this->ion_auth->logged_in() || !$this->ion_auth->is_admin() || $this->ion_auth->user()->result()[0]->type > 4 )
    		die();
    }

    public function deleteUser()
    {
        $InputData = json_decode(file_get_contents('php://input'),true);
        $UserId = $InputData['UserId'];
        $Return['StatusResponse'] = 0;
        if ($this->ion_auth->delete_user($UserId)) {
            $Return['StatusResponse'] = 1;
        }
        echo json_encode($Return);
    }

    public function editUser()
    {
        $InputData = json_decode(file_get_contents('php://input'),true);
        $UserData = $this->general->filtering_datas($InputData['data']);
        $Return['StatusResponse'] = 0;

        $UserName = '';
        if ($UserData['Group'] == 1) {
            $UserName = $UserData['UserName'];
        }
        else if ($UserData['Group'] == 2) {
            $UserName = $UserData['UserName'];
        }

        // --- Edit Password --- //
        if (isset($UserData['Password1']) && isset($UserData['Password2']) ) {
            if ($UserData['Password1'] != $UserData['Password2']) {
                $Return['Message'] = 'Password Not match';
                echo json_encode($Return);
                die();
            }
            else {
                $user = $this->ion_auth->user($UserData['MemberId'])->row();
                $Password = $this->ion_auth->reset_password($user->email, $UserData['Password1']);
                $Return['user'] = $user;
            }
        }
        else {
            $Password = false;
        }
         // --- End Password --- //

        $dataUser = array(
            'first_name'    => $UserData['FirstName'],
            'last_name'     => $UserData['LastName'],
            'username'      => $UserName,
            'updated_date'  => date('Y-m-d H:i:s'),
            'phone'         => $UserData['Phone']
         );

        if ($this->ion_auth->update($UserData['MemberId'], $dataUser))
        {
            $this->ion_auth->set_message_delimiters('<p><strong>','</strong></p>');
            $messages = $this->ion_auth->messages();
            $Return['StatusResponse'] = 1;
        }
        else
        {
            $this->ion_auth->set_error_delimiters('<p><strong>','</strong></p>');
            $errors = $this->ion_auth->errors();
            $Return['Message'] = $errors;
        }

        $Return['UserData'] = $UserData;
        $Return['Message']  = '';
        echo json_encode($Return);
    }

    // -------------------------------------------------- BANK -------------------------------------------------- //
    function addUser()
    {
        $InputData = json_decode(file_get_contents('php://input'),true);
        $UserData = $this->general->filtering_datas($InputData['data']);
        $Return = ['StatusResponse'=>0, 'Message'=>'', 'Data'=> $UserData];
        
        
        if ($UserData['Password1'] != $UserData['Password2']) {
            $Return['Message'] = 'Password Not match';
            echo json_encode($Return);
            die();
        }

        $AdditionalData = array(
            'first_name'    => $UserData['FirstName'],
            'last_name'     => $UserData['LastName'],
            'phone'         => $UserData['Phone'],
            'status'        => 1,
            'type'          => $UserData['Group'] == 1 ? 2 : 5,
            'created_date'  => date('Y-m-d H:i:s'),
            'created_by'    => 0
        );
    
        $this->ion_auth->register($UserData['UserName'], $UserData['Password1'], $UserData['Email'], $AdditionalData, [$UserData['Group']]);

        $Return['StatusResponse'] = 1;
        echo json_encode($Return);
    }

}