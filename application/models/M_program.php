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
    public function save_sop($data)
    {

        return $this->db->insert("file_sopmagang", $data);
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
    function simpan_upload($judul, $kat, $isi, $gambar, $upl, $upd, $slug, $publik)
    {
        $hasil = $this->db->query("INSERT INTO tb_berita(judul,id_beritakat,isi_berita,foto_berita,upload_at,update_at,slug,publik) VALUES ('$judul','$kat','$isi','$gambar','$upl','$upd','$slug','$publik')");
        return $hasil;
    }
    public function berandkat()
    {
        $this->db->select('*');
        $this->db->from('tb_katberita');
        $this->db->join('tb_berita', 'tb_berita.id_beritakat=tb_katberita.id_beritakat');

        return $this->db->get();
    }
    function update_counter($slug)
    {
        //return current article views
        $this->db->where('slug', urldecode($slug));
        $this->db->select('visitor');
        $count = $this->db->get('tb_berita')->row();
        // then increase by one
        $n = floatval(1);
        $this->db->where('slug', urldecode($slug));
        $this->db->set('visitor', ($count->visitor + $n));
        $this->db->update('tb_berita');
    }
    // ini untuk dashboard admin
    function trending()
    {
        $this->db->select('*');
        $this->db->from('tb_katberita');
        $this->db->join('tb_berita', 'tb_berita.id_beritakat=tb_katberita.id_beritakat');
        $this->db->order_by('visitor', 'desc');
        $this->db->limit(3);
        return $this->db->get();
    }
    public function hitungvisitor()
    {
        $this->db->select_sum('visitor');
        $query = $this->db->get('tb_berita');
        if ($query->num_rows() > 0) {
            return $query->row()->visitor;
        } else {
            return 0;
        }
    }
    function edit_berita($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_berita($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
