<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_opd');
        $this->load->library('form_validation');
        $this->load->model('M_galkat');
        $this->load->model('M_galery');
        $this->load->model('M_pubkat');
        $this->load->model('M_publikasi');
        $this->load->model('M_slide');
        $this->load->model('M_berita');
        $this->load->model('M_beritakat');
        $this->load->model('M_unitkat');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['judul'] = 'Admin | Dashoard';
        $data['trend'] = $this->M_berita->trending()->result();

        //hitung dashboard
        $data['totber'] = $this->db->count_all_results('tb_berita');
        $data['totunit'] = $this->db->count_all_results('tb_unitkat');
        $data['totp'] = $this->db->count_all_results('tb_pengurus');
        $data['totpub'] = $this->db->count_all_results('tb_publikasi');
        $data['totgal'] = $this->db->count_all_results('tb_galery');
        $data['tbk'] = $this->db->count_all_results('tb_katberita');
        $data['total_visit'] = $this->M_berita->hitungvisitor();

        $this->load->view('operator/layout/head', $data);
        $this->load->view('operator/layout/header');
        $this->load->view('operator/layout/sidebar', $data);
        $this->load->view('operator/admin', $data);
        $this->load->view('operator/layout/footer');
    }
}
