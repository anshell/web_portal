<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_opd');
    }

    public function index()
    {
        $data['opd'] = $this->M_opd->tampil_data()->result();
        $data['judul'] = 'Login';
        $this->load->view('admin/frontauth/head', $data);
        $this->load->view('admin/frontauth/header', $data);
        $this->load->view('admin/auth/login', $data);
    }
    public function login()
    {

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Kampus Merdeka';
            redirect('auth');
        } else {
            $this->_ceklogin();
        }
    }
    private function _ceklogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_admin', ['username' => $username])->row_array();

        if ($user) {
            if ($user['role'] == 1) {
                if (password_verify($password, $user['password'])) {

                    $data = [
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'role' => $user['role'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
                Password salah!
              </div>');
                    redirect('auth', 'refresh');
                }
            } else if ($user['role'] == 2) {
                if (password_verify($password, $user['password'])) {

                    $data = [
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'role' => $user['role'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('operator');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
                Password salah!
              </div>');
                    redirect('auth', 'refresh');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Error!
              </div>');
                redirect('auth', 'refresh');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
        Not Registered!
      </div>');
        }
        redirect('auth');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role');

        redirect('auth', 'refresh');
    }
}
