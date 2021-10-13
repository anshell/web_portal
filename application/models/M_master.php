<?php

class M_master extends CI_Model
{
    /**
     * Model Tabel Fakultas
     */
    function tampil_fakultas()
    {
        return $this->db->get('tbl_fakultas');
    }
    function simpan_fakultas($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_fakultas($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_fakultas($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_fakultas($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    /**
     * Model Tabel Jurusan
     */
    public function getjur($kfak)
    {
        $this->db->select('*');
        $this->db->from('tbl_jurusan');
        $this->db->where('kfak', $kfak);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getProdi($kjur)
    {
        $this->db->select('*');
        $this->db->from('tbl_prodi');
        $this->db->where('kjur', $kjur);
        $query = $this->db->get();
        return $query->result_array();
    }
    function tampil_jurusan()
    {
        return $this->db->get('tbl_jurusan');
    }
    function simpan_jurusan($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_jurusan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_jurusan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_jurusan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    /**
     * Model Tabel Program Studi
     */
    function tampil_prodi()
    {
        return $this->db->get('tbl_prodi');
    }
    function simpan_prodi($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_prodi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_prodi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_prodi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
