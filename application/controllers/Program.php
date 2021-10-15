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
        $this->load->model('M_program');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'aktif' => 'aktif',
            'status' => '1',
            'opd' => $this->M_opd->tampil_data()->result(),
            'sli' => $this->M_slide->tampil_data()->result(),
            'prog' => $this->M_program->tampil_data()->result(),
            'galkat' => $this->M_galkat->tampil_data()->result(),
            'pubkat' => $this->M_pubkat->tampil_data()->result(),
            'info' => $this->M_program->tampil_data()->result(),
            'magang' => $this->M_program->front_data_magang()

        );

        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('program/magang', $data);
        $this->load->view('layout/frontfooter', $data);
    }

    public function mengajar()
    {
        $data = array(
            'aktif' => 'aktif',
            'status' => '1',
            'opd' => $this->M_opd->tampil_data()->result(),
            'sli' => $this->M_slide->tampil_data()->result(),
            'prog' => $this->M_program->tampil_data()->result(),
            'galkat' => $this->M_galkat->tampil_data()->result(),
            'pubkat' => $this->M_pubkat->tampil_data()->result(),
            'info' => $this->M_program->tampil_data()->result()

        );

        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('program/mengajar', $data);
        $this->load->view('layout/frontfooter', $data);
    }

    public function kkn()
    {
        $data = array(
            'aktif' => 'aktif',
            'status' => '1',
            'opd' => $this->M_opd->tampil_data()->result(),
            'sli' => $this->M_slide->tampil_data()->result(),
            'prog' => $this->M_program->tampil_data()->result(),
            'galkat' => $this->M_galkat->tampil_data()->result(),
            'pubkat' => $this->M_pubkat->tampil_data()->result(),
            'info' => $this->M_program->tampil_data()->result()

        );

        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('program/kkn', $data);
        $this->load->view('layout/frontfooter', $data);
    }
    public function wirausaha()
    {
        $data = array(
            'aktif' => 'aktif',
            'status' => '1',
            'opd' => $this->M_opd->tampil_data()->result(),
            'sli' => $this->M_slide->tampil_data()->result(),
            'prog' => $this->M_program->tampil_data()->result(),
            'galkat' => $this->M_galkat->tampil_data()->result(),
            'pubkat' => $this->M_pubkat->tampil_data()->result(),
            'info' => $this->M_program->tampil_data()->result()

        );

        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('program/wirausaha', $data);
        $this->load->view('layout/frontfooter', $data);
    }
    public function pertukaran()
    {
        $data = array(
            'aktif' => 'aktif',
            'status' => '1',
            'opd' => $this->M_opd->tampil_data()->result(),
            'sli' => $this->M_slide->tampil_data()->result(),
            'prog' => $this->M_program->tampil_data()->result(),
            'galkat' => $this->M_galkat->tampil_data()->result(),
            'pubkat' => $this->M_pubkat->tampil_data()->result(),
            'info' => $this->M_program->tampil_data()->result()

        );

        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('program/pertukaran', $data);
        $this->load->view('layout/frontfooter', $data);
    }
    public function penelitian()
    {
        $data = array(
            'aktif' => 'aktif',
            'status' => '1',
            'opd' => $this->M_opd->tampil_data()->result(),
            'sli' => $this->M_slide->tampil_data()->result(),
            'prog' => $this->M_program->tampil_data()->result(),
            'galkat' => $this->M_galkat->tampil_data()->result(),
            'pubkat' => $this->M_pubkat->tampil_data()->result(),
            'info' => $this->M_program->tampil_data()->result()

        );

        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('program/penelitian', $data);
        $this->load->view('layout/frontfooter', $data);
    }
    public function kemanusiaan()
    {
        $data = array(
            'aktif' => 'aktif',
            'status' => '1',
            'opd' => $this->M_opd->tampil_data()->result(),
            'sli' => $this->M_slide->tampil_data()->result(),
            'prog' => $this->M_program->tampil_data()->result(),
            'galkat' => $this->M_galkat->tampil_data()->result(),
            'pubkat' => $this->M_pubkat->tampil_data()->result(),
            'info' => $this->M_program->tampil_data()->result()

        );

        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('program/kemanusiaan', $data);
        $this->load->view('layout/frontfooter', $data);
    }
    public function independen()
    {
        $data = array(
            'aktif' => 'aktif',
            'status' => '1',
            'opd' => $this->M_opd->tampil_data()->result(),
            'sli' => $this->M_slide->tampil_data()->result(),
            'prog' => $this->M_program->tampil_data()->result(),
            'galkat' => $this->M_galkat->tampil_data()->result(),
            'pubkat' => $this->M_pubkat->tampil_data()->result(),
            'info' => $this->M_program->tampil_data()->result()

        );
        $this->load->view('layout/frontheader', $data);
        $this->load->view('layout/frontnav', $data);
        $this->load->view('program/independen', $data);
        $this->load->view('layout/frontfooter', $data);
    }
}
