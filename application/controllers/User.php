<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_opd');
        $this->load->library('form_validation');
        $this->load->model('M_user');
        $this->load->model('M_master');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data = array(
            'opd' => $this->M_opd->tampil_data()->result(),
            'judul' => 'Master | Pengguna',
            'user' => $this->M_user->getAllUsers(),
        );
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/user/list', $data);
        $this->load->view('admin/layout/footer');
    }
    public function tambah_user()
    {
        $data = array(
            'opd' => $this->M_opd->tampil_data()->result(),
            'judul' => 'Master | Pengguna',

            'role' => $this->M_user->tampil_role(),
            'fakultas' => $this->M_master->tampil_fakultas()->result(),

        );
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/user/add', $data);
        $this->load->view('admin/layout/footer');
    }
    public function simpan()
    {

        $data = array(

            'nama'        => $this->input->post('nama'),
            'username'        => $this->input->post('username'),
            'email'           => $this->input->post('email'),
            'password'        => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role'       => $this->input->post('role'),
            'aktif'           => $this->input->post('aktif'),
            'kfak'   => $this->input->post('kfak')

        );

        //insert data via model
        $register = $this->M_user->simpan_user($data);

        //cek apakah data berhasil tersimpan
        if ($register) {

            echo "success";
        } else {

            echo "error";
        }
    }
}
