<?php

class m_page extends CI_Model
{
	function getPageBySeoUrl($seoUrl)
    {
        $this->db->select('v2_master_page.*');
        $this->db->where(['seourl'=>$seoUrl]);
        $this->db->limit(1);
        $list = $this->db->get('v2_master_page');
        return $list->row();
    }

}