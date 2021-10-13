<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
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
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '1';
        $data['terkini'] = $this->M_berita->terkini()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('program/magang', $data);
        $this->load->view('layout/footer', $data);
    }

    public function mengajar()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '1';
        $data['terkini'] = $this->M_berita->terkini()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('program/mengajar', $data);
        $this->load->view('layout/footer', $data);
    }

    public function kkn()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '1';
        $data['terkini'] = $this->M_berita->terkini()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('program/kkn', $data);
        $this->load->view('layout/footer', $data);
    }
    public function wirausaha()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '1';
        $data['terkini'] = $this->M_berita->terkini()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('program/wirausaha', $data);
        $this->load->view('layout/footer', $data);
    }
    public function pertukaran()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '1';
        $data['terkini'] = $this->M_berita->terkini()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('program/pertukaran', $data);
        $this->load->view('layout/footer', $data);
    }
    public function penelitian()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '1';
        $data['terkini'] = $this->M_berita->terkini()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('program/penelitian', $data);
        $this->load->view('layout/footer', $data);
    }
    public function kemanusiaan()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '1';
        $data['terkini'] = $this->M_berita->terkini()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('program/kemanusiaan', $data);
        $this->load->view('layout/footer', $data);
    }
    public function independen()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '1';
        $data['terkini'] = $this->M_berita->terkini()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();

        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('program/independen', $data);
        $this->load->view('layout/footer', $data);
    }
}
