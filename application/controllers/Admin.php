<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Admin | Dashoard';
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/admin');
        $this->load->view('admin/layout/footer');
    }
}
