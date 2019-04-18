<?php

class users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library(['session', 'ion_auth', 'form_validation', 'general']);
        $this->general->saveVisitor($this, [2, 0]);
        if ( !$this->ion_auth->logged_in() || !$this->ion_auth->is_admin() || $this->ion_auth->user()->result()[0]->type > 4 )
    		redirect(base_url('adminpanel/login/logout'));
        $this->load->model('manages/m_manages');
    }

    function index(){

    	$data['HeaderBar'] = [
            'FaName'            => 'fa-edit',
            'LeftMenuTitle'     => 'Add New Users',
            'RightMenuTitle'    => [
                ['isUrl' => TRUE, 'Name' => 'Page', 'Url' => 'users'],
                ['isUrl' => FALSE,'Name' => 'Users'],
            ]
        ];
        $data = $this->globalFunction($data);

        $data['Member']         = $this->ion_auth->user()->row();
        $data['List']           = [];
        // $data['List']   = $this->m_manages->getListUsers();
        $Users = $this->ion_auth->users()->result();
        foreach ($Users as $key => $value) {
            $User = [
                'UserId'        => $value->id,
                'UserName'      => $value->username,
                'Email'         => $value->email,
                'FirstName'     => $value->first_name,
                'LastName'      => $value->last_name,
                'Group'         => $this->ion_auth->get_users_groups($value->id)->row()
            ];
            $data['List'][] = $User;
        }

        usort($data['List'], function($a, $b) {
            return $a['Group']->id - $b['Group']->id;
        });

        // echo "<pre>";
        // print_r($data['List']);
        // die();
        $this->load->view('adminpanel/users/all', $data);
    }

    public function add($UserId=false) {
        $data['HeaderBar'] = [
            'FaName'            => 'fa-edit',
            'LeftMenuTitle'     => 'Edit Users',
            'RightMenuTitle'    => [
                ['isUrl' => TRUE, 'Name' => 'Users', 'Url' => 'users/add'],
                ['isUrl' => FALSE,'Name' => 'Edit Users'],
            ]
        ];
        $data = $this->globalFunction($data);

        // $this->ion_auth->add_to_group(2, 3);

        // $data['UserGroup'] = $this->ion_auth->get_users_groups(6)->row();
        $MemberData = [];
        if ($UserId) {
            $Member         = $this->ion_auth->user($UserId)->row();
            if (!$Member) die('');


            $MemberData = [
                'MemberId'      => $Member->id,
                'UserName'      => $Member->username,
                'Email'         => $Member->email,
                'FirstName'     => $Member->first_name,
                'LastName'      => $Member->last_name,
                'Phone'         => $Member->phone,
                'Password'      => $Member->password,
                'Type'          => $Member->type,
                'Group'         => $this->ion_auth->get_users_groups($Member->id)->row()->id
            ];
        }
        $data['UserId']     = $UserId ? $UserId : 0;
        $data['MemberData'] = $MemberData;

        // echo "<pre>";
        // print_r($MemberData);
        // print_r($this->ion_auth->users()->result());
        // die();

        $this->load->view('adminpanel/users/add', $data);
    }

    protected function globalFunction($data)
    {
        $data['MasterGeneral']         = $this->m_get->getRowDynamic([
            'select'    => 'favicon, logo',
            'from'      => 'v2_master_landingpage',
            'where'     => [
                'id' => 1
            ]
        ]);

    	$data['ViewHead'] 			= $this->load->view('adminpanel/template/head', $data, TRUE);
    	$data['ViewPreLoader'] 		= $this->load->view('adminpanel/template/preloader', [], TRUE);
    	$data['ViewFooter'] 		= $this->load->view('adminpanel/template/footer', [], TRUE);
    	$data['ViewLeftPanel'] 		= $this->load->view('adminpanel/template/left_panel', $data, TRUE);
    	$data['ViewHeaderBar'] 		= $this->load->view('adminpanel/template/header_bar', $data['HeaderBar'], TRUE);
    	$data['ViewCopyRight'] 		= $this->load->view('adminpanel/template/copyright', [], TRUE);
    	return $data;
    }

}