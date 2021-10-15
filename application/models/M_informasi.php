<?php

class  M_informasi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllInfo()
    {
        $this->db->select('*');
        $this->db->from('tb_informasi');
        $this->db->where('setaktif', '1');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }
}
