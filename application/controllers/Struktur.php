<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_organ');

        $this->load->model('M_galkat');
        $this->load->model('M_pubkat');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['now'] = date("j F Y");
        $data['aktif'] = 'active';
        $data['status'] = '2';

        $data['organ'] = $this->M_organ->tampil_data()->result();

        $data['galkat'] = $this->M_galkat->tampil_data()->result();
        $data['pubkat'] = $this->M_pubkat->tampil_data()->result();

        $this->load->view('layout/head');
        $this->load->view('layout/header', $data);
        $this->load->view('struktur', $data);
        $this->load->view('layout/footer');
    }
}
