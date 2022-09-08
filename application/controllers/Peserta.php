<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('peserta_model');
        $this->load->helper('tgl_indo_helper');
    }

	public function index()
	{
        $data = [
            'title' => 'Data Peserta Magang',
            'peserta' => $this->peserta_model->getDataPeserta(),
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'isi' => 'peserta/list'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function tambah()
	{
        $data = [
            'title' => 'Tambah Peserta Magang',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'id_peserta' => $this->peserta_model->id_peserta(),
            'asal' => $this->db->get('asal')->result(),
            'isi' => 'peserta/tambah'
        ];
		$this->load->view('layout/wrapper', $data);
    }

    public function simpan()
    {
        $data = [
            'id_peserta'        => $this->input->post('id_peserta'),
            'nama_peserta'      => $this->input->post('nama_peserta'),
            'id_asal'           => $this->input->post('id_asal'),
            'mulai'             => $this->input->post('mulai'),
            'berakhir'          => $this->input->post('berakhir')
        ];
        $query = $this->db->insert('peserta', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
        redirect('peserta');
    }

    public function edit($id)
    {
        $data = [
            'title'       => 'Edit Data Peserta',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'asal' => $this->db->get('asal')->result(),
            'peserta'        => $this->peserta_model->edit($id),
            'isi'         => 'peserta/edit'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function update()
    {
        $id_peserta = $this->input->post('id_peserta');
        $data = [
            'id_peserta'       => $this->input->post('id_peserta'),
            'nama_peserta'  => $this->input->post('nama_peserta'),
            'id_asal'   => $this->input->post('id_asal'),
            'mulai'    => $this->input->post('mulai'),
            'berakhir'  => $this->input->post('berakhir')
        ];
        $query = $this->peserta_model->update($id_peserta, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
        redirect('peserta');
    }
   

    public function hapus($id)
    {
        $query = $this->peserta_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('peserta');
    }

    
}
