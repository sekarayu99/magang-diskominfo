<?php

class Dashboard_model extends CI_Model {
    
    public function countAsal()
    {
        return $this->db->count_all('asal');
    }

    public function countPeserta()
    {
        return $this->db->count_all('peserta');
    }

}