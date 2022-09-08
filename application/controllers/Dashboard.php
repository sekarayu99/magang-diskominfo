<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
	public function index()
	{
        $this->load->model('dashboard_model');
        $this->load->model('peserta_model');
        $data = [
            'title'     => 'Dashboard',
            'asal'      => $this->dashboard_model->countAsal(),
            'peserta'   => $this->dashboard_model->countPeserta(),
            'magang'    => $this->peserta_model->getDataPeserta(),
            'login'     => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'isi'       => 'dashboard/list'
        ];
		$this->load->view('layout/wrapper',$data);
    }
    
}
