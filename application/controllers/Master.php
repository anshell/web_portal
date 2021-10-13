<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_opd');
        $this->load->library('form_validation');
        $this->load->model('M_master');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data = array(
            'opd' => $this->M_opd->tampil_data()->result(),
            'judul' => 'Master | Fakultas',
            'fakultas' => $this->M_master->tampil_fakultas()->result(),
        );
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/master/list', $data);
        $this->load->view('admin/layout/footer');
    }
    public function jurusan()
    {
        $data = array(
            'opd' => $this->M_opd->tampil_data()->result(),
            'judul' => 'Master | Jurusan',
            'jurusan' => $this->M_master->tampil_jurusan()->result(),
        );

        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/master/jurusan', $data);
        $this->load->view('admin/layout/footer');
    }
    public function prodi()
    {
        $data = array(
            'opd' => $this->M_opd->tampil_data()->result(),
            'judul' => 'Master | Program Studi',
            'prodi' => $this->M_master->tampil_prodi()->result(),
        );
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/master/prodi', $data);
        $this->load->view('admin/layout/footer');
    }
}
