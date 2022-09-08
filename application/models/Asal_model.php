<?php

class Asal_model extends CI_Model {

    public function edit($id)
    {
        $this->db->where('id_asal', $id);
        return $this->db->get('asal')->row_array();
    }

    public function update($id_asal, $data)
    {
        $this->db->where('id_asal', $id_asal);
        $this->db->update('asal', $data);
        
    }

    public function hapus($id)
    {
        $this->db->where('id_asal', $id);
        $this->db->delete('asal');
    }
    
}
