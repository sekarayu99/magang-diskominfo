<?php

class Peserta_model extends CI_Model {

    public function id_peserta()
    {
        $this->db->select('RIGHT(peserta.id_peserta,3) as kode', FALSE);
        $this->db->order_by('id_peserta', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('peserta');
        if ($query->num_rows()<>0) {
            $data = $query->row();
            $kode = intval($data->kode)+1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi = "MG".$kodemax;
        return $kodejadi;
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('asal', 'peserta.id_asal = asal.id_asal');
        $this->db->where('peserta.id_peserta', $id);
        return $this->db->get()->row_array();
    }

    public function update($id_peserta, $data)
    {
        $this->db->where('id_peserta', $id_peserta);
        $this->db->update('peserta', $data);
        
    }

    public function getDataPeserta()
    {
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('asal', 'peserta.id_asal = asal.id_asal');
        return $this->db->get()->result();
    }

    public function getDataById_peserta($id)
    {
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->join('asal', 'peserta.id_asal = asal.id_asal');
        $this->db->where('peserta.id_peserta', $id);
        return $this->db->get()->row_array();
    }

    public function deletePeserta($id)
    {
        $this->db->where('id_peserta', $id);
        $this->db->delete('peserta');
    }

}
