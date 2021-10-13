<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->load->model('M_program');
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
        $data['allprog'] = $this->M_program->tampil_data()->result();

        //hitung dashboard
        $data['totber'] = $this->db->count_all_results('tb_berita');
        $data['totunit'] = $this->db->count_all_results('tb_unitkat');
        $data['totp'] = $this->db->count_all_results('tb_pengelola');
        $data['totpub'] = $this->db->count_all_results('tb_publikasi');
        $data['totgal'] = $this->db->count_all_results('tb_galery');
        $data['tbk'] = $this->db->count_all_results('tb_katberita');
        $data['total_visit'] = $this->M_berita->hitungvisitor();

        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('admin/layout/footer');
    }
    // public function daftar()
    //  {
    //      $data['opd'] = $this->M_opd->tampil_data()->result();
    //      $data['judul'] = 'DAFFTAR';
    //      $this->load->view('admin/frontauth/head', $data);
    //      $this->load->view('admin/frontauth/header');
    //      $this->load->view('admin/auth/daftar');
    //  }

    public function regis()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'password tidak sama!',
            'min_length' => 'password min 8 digit!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[8]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Seller Center Beliriau';
            $this->load->view('auth/registrasi', $data);
        } else {

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),

                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role' => 1,
                'create_at' => date('y-m-d h:i:s'),
                'aktif' => 1,

            ];
            $this->db->insert('tb_admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil mendaftar, silahkan login!
          </div>');
            redirect('login');
        }
    }
}
