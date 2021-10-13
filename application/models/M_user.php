<?php

class  M_user extends CI_Model
{
    private $_table = "tb_admin";
    public function __construct()
    {
        parent::__construct();
    }
    public function getAllUsers()
    {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function tampil_role()
    {
        $this->db->select('*');
        $this->db->from('tb_role');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    public function getUserAcl($id)
    {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $this->db->join('tb_role', 'tb_role.idrole = tb_admin.role');
        $this->db->where('tb_admin.id', $id);
        $query = $this->db->get();

        return $query->result();
    }
    public function simpan_user($data)
    {

        return $this->db->insert("tb_admin", $data);
    }
    public function editMe($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('tb_admin', $data);
        return TRUE;
    }
    public function editMePasswd($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('tb_admin', $data);
        return TRUE;
    }
    public function getUser($id)
    {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->result();
    }

    public function getAccesOP($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
}
