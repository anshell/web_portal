<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homeunit extends CI_Controller
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
        $this->load->model('M_unitkat');
        $this->load->model('M_unit');
        $this->load->model('M_opd');
        $this->load->model('M_berita');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '1';
        $data['misi'] = $this->M_misi->tampil_data()->result();
        $data['visi'] = $this->M_visi->tampil_data()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['terkini'] = $this->M_berita->terkini()->result();
        $this->load->view('layout/head');
        $this->load->view('layout/header', $data);
        $this->load->view('layout/slider');
        $this->load->view('home', $data);
        $this->load->view('layout/footer');
    }
    public function show($slug)
    {
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '3';
        $data['misi'] = $this->M_misi->tampil_data()->result();
        $data['visi'] = $this->M_visi->tampil_data()->result();
        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $where = array('slug' => $slug);
        $data['terkini'] = $this->M_berita->terkini()->result();
        $data['unitkat'] = $this->M_unitkat->tampil_data()->result();
        $data['unitshow'] = $this->M_unitkat->edit_data($where, 'tb_unitkat')->result();
        $data['uk'] = $this->M_unit->unitandkat();
        $this->load->view('layout/head', $data);
        $this->load->view('layout/header', $data);

        $this->load->view('unitshow', $data);
        $this->load->view('layout/footer', $data);
    }
}
