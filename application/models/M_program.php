<?php

class M_program extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tb_program');
    }

    function tampil_data_magang()
    {
        $this->db->select('*');
        $this->db->from('tb_magang');
        $this->db->join('tbl_fakultas', 'tb_magang.kfak=tbl_fakultas.kfak');
        $this->db->order_by('idmagang', 'desc');

        return $this->db->get();
    }
    function front_data_magang()
    {
        $this->db->select('*');
        $this->db->from('tb_magang');
        $this->db->join('tbl_fakultas', 'tb_magang.kfak=tbl_fakultas.kfak');
        $this->db->join('file_sopmagang', 'tb_magang.kfak=file_sopmagang.kfak');
        $this->db->join('file_pobmagang', 'tb_magang.kfak=file_pobmagang.kfak');
        $this->db->order_by('idmagang', 'desc');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    function viewby_id_magang($id)
    {
        $this->db->select('*');
        $this->db->from('tb_magang');
        $this->db->join('tbl_fakultas', 'tb_magang.kfak=tbl_fakultas.kfak');
        $this->db->join('tbl_jurusan', 'tbl_fakultas.kfak=tbl_jurusan.kfak');
        $this->db->join('tbl_prodi', 'tbl_jurusan.kjur=tbl_prodi.kjur');
        $this->db->where('tb_magang.idmagang', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }
    function viewby_id_fak($id)
    {
        $this->db->select('*');
        $this->db->from('tb_magang');
        $this->db->where('kfak', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }
    function ceksop($id)
    {
        $this->db->select('*');
        $this->db->from('file_sopmagang');
        $this->db->where('kfak', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    public function save_sop($data)
    {

        return $this->db->insert("file_sopmagang", $data);
    }

    public function updateFileSOP($file, $id)
    {

        $data = array(
            'file_sop' => $file
        );
        $this->db->where('idsop', $id);
        $this->db->update('file_sopmagang', $data);
        return TRUE;
    }
    public function save_pob($data)
    {

        return $this->db->insert("file_pobmagang", $data);
    }







    function simpan_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_data($where, $table)
    {

        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
