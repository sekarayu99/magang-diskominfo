<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('asal_model');
    }
    
	public function index()
	{
        $data = [
            'title' => 'Sekolah/Kampus',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'asal' => $this->db->get('asal')->result(),
            'isi' => 'asal/list'
        ];
		$this->load->view('layout/wrapper',$data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Sekolah/Kampus',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'isi' => 'asal/tambah'
        ];
		$this->load->view('layout/wrapper',$data);
    }

    public function simpan()
    {
        $data = [
            'nama_asal' => $this->input->post('nama_asal')
        ];
        $query = $this->db->insert('asal', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('asal');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Sekolah/Kampus',
            'login' => $this->db->get_where('login', ['username' => $this->session->userdata('username')])->row_array(),
            'asal' => $this->asal_model->edit($id),
            'isi' => 'asal/edit'
        ];
        $this->load->view('layout/wrapper', $data);
    }

    public function update()
    {
        $id_asal = $this->input->post('id_asal');
        $data = [
            'nama_asal' => $this->input->post('nama_asal')
        ];
        $query = $this->asal_model->update($id_asal, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di update!</div>');
        redirect('asal');
    }

    public function hapus($id)
    {
        $query = $this->asal_model->hapus($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di hapus!</div>');
        redirect('asal');
    }
    
}
