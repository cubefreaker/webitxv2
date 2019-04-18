<?php

class page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_page');
        $this->load->library(['session', 'ion_auth', 'general']);
    }

    function index($seoUrl=FALSE)
    {
        // redirect to landing page if seoUrl is false
        if (!$seoUrl) redirect(base_url(), 'refresh');
        // get general data for header and footer
        $data = $this->loadGeneralData();
        // redirect to landing page if pageDetail is false
        if(!$data['pageDetail']     = $this->m_page->getPageBySeoUrl($seoUrl))
            redirect(base_url(), 'refresh');

        // testimonial page
        if ($data['pageDetail']->id == 24) {
            # code...
        }
        // career page
        elseif ($data['pageDetail']->id == 25) {
            # code...
        }
        elseif ($data['pageDetail']->redirect_url && $data['pageDetail']->redirect_url != "") {
            redirect($data['pageDetail']->redirect_url);
        }
        else {
            $this->load->view('page/index', $data);
        }
    }

    protected function loadGeneralData()
    {
        $data['masterLandingPage']  = $this->m_landingpage->getMasterLandingpage();
        $data['masterSetting']      = $this->m_landingpage->getMasterSetting();
        $data['footerPage']         = $this->m_landingpage->getFooterPage();
        $data['navPage']            = $this->m_landingpage->getNavPage();
        return $data;
    }

}