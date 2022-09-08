<?php

class Laporan_model extends CI_Model {

    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('asal', 'peserta.id_asal = asal.id_asal');
        return $this->db->get()->result();
    }

    public function filterData($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('asal', 'peserta.id_asal = asal.id_asal');
        $this->db->where('peserta.mulai >=', $tgl_awal);
        $this->db->where('peserta.mulai <=', $tgl_akhir);
        return $this->db->get()->result();
    }

    
}
