<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (isset($_POST['submit'])) {

            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            if ($this->form_validation->run() == false) {

                redirect('auth', 'refresh');
            } else {
                $this->_ceklogin();
            }
        }

        $this->load->view('layout/loginheader');
        $this->load->view('layout/loginnav');
        $this->load->view('admin/auth/login');
        $this->load->view('layout/loginfooter');
    }

    private function _ceklogin()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

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
                    $this->session->set_flashdata('success', 'Password salah!');
                    redirect('auth', 'refresh');
                }
            } else if ($user['role'] == 2) {
                if (password_verify($password, $user['password'])) {

                    $data = [
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'role' => $user['role'],
                        'kfak' => $user['kfak'],
                        'kpst' => $user['kpst'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('operator');
                } else {
                    $this->session->set_flashdata('error', 'Password salah!');
                    redirect('auth', 'refresh');
                }
            } else {
                $this->session->set_flashdata('error', 'Error!');
                redirect('auth', 'refresh');
            }
        } else {
            $this->session->set_flashdata('error', 'terjadi kesalahan!');
        }
        redirect('auth', 'refresh');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role');

        redirect('auth', 'refresh');
    }
}
