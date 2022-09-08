<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_model');
        $this->load->helper('tgl_indo_helper');
    }

	public function index()
	{
        $data = [
            'title' => 'Laporan Peserta Magang',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'peserta' => $this->laporan_model->getAllData(),
            'isi' => 'laporan/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function filter()
	{

        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $this->session->set_userdata('tanggal_awal', $tgl_awal);
        $this->session->set_userdata('tanggal_akhir', $tgl_akhir);

        if (empty($tgl_awal) || empty($tgl_akhir)) {
            $data = [
                'title' => 'Data Peserta Magang',
                'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
                'peserta' => $this->laporan_model->getAllData(),
                'isi' => 'laporan/list'
            ];
        } else {
            $data = [
                'title' => 'Data Peserta Magang',
                'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
                'peserta' => $this->laporan_model->filterData($tgl_awal, $tgl_akhir),
                'isi' => 'laporan/list'
            ];
        }
		$this->load->view('layout/wrapper', $data);
    }

    public function print()
    {
        if (empty($this->session->userdata('tanggal_awal')) || empty($this->session->userdata('tanggal_akhir'))) {
            $data = [
                'peserta' => $this->laporan_model->getAllData(),
                'isi' => 'laporan/list'
            ];
            $this->load->view('laporan/print', $data);
        } else {
            $data = [
                'peserta' => $this->laporan_model->filterData($this->session->userdata('tanggal_awal'),$this->session->userdata('tanggal_akhir')),
                'isi' => 'laporan/list'
            ];
            $this->load->view('laporan/print', $data);
        }
    }

    
}
