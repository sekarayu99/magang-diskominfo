<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    public function proses_login($user, $pass)
    {
        $password = md5($pass);
        $user = $this->db->where('username', $user); 
        $pass = $this->db->where('password', $password);
        $query = $this->db->get('login'); 
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $sess = array (
                    'id'        => $row->id,
                    'nama'      => $row->nama,
                    'username'  => $row->username,
                    'password'  => $row->password
                );
                $this->session->set_userdata($sess);
            }
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login gagal, Silahkan periksa username atau password!</div>');
            redirect('dashboard');
        }
    }
}
