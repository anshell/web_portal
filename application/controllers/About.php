<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_visi');
        $this->load->model('M_misi');
        $this->load->model('M_galkat');
        $this->load->model('M_galery');
        $this->load->model('M_pubkat');
        $this->load->model('M_publikasi');
        $this->load->model('M_slide');
        $this->load->model('M_berita');
        $this->load->model('M_beritakat');
        $this->load->model('M_unitkat');
        $this->load->model('M_opd');
        $this->load->model('M_profil');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        // if (!$this->session->userdata('username')) {
        //     redirect('auth');
        // }
    }

    public function index()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '2';
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['profil'] = $this->M_profil->getAllProfil()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();



        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('about', $data);
        $this->load->view('layout/frontfooter', $data);
    }

    public function peran()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '2';
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();
        $data['peran'] = $this->M_profil->getAllProfil()->result();


        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('peran', $data);
        $this->load->view('layout/frontfooter', $data);
    }

    public function pengelola()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '2';
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();
        $data['pengelola'] = $this->M_profil->getAllPengelola()->result();


        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('pengelola', $data);
        $this->load->view('layout/frontfooter', $data);
    }
}
