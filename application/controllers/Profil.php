<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_opd');
        $this->load->library('form_validation');
        $this->load->model('M_user');
        $this->load->model('M_master');
        $this->load->model('M_profil');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data = array(
            'opd' => $this->M_opd->tampil_data()->result(),
            'judul' => 'Profil | Profil dan Peranan',
            'profil' => $this->M_profil->getAllProfil()->result(),
        );
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/profil/list', $data);
        $this->load->view('admin/layout/footer');
    }
    public function tambah()
    {
        $data = array(
            'opd' => $this->M_opd->tampil_data()->result(),
            'judul' => 'Profil | Tambah',

        );
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/profil/add', $data);
        $this->load->view('admin/layout/footer');
    }
    public function simpan_profil()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('profil', 'profil', 'required');
        $this->form_validation->set_rules('peran', 'peran', 'required');

        if ($this->form_validation->run() == FALSE) {

            redirect('admin/profil/add');
        } else {

            $profil = $this->input->post('profil');
            $peran = $this->input->post('peran');


            $data = array(
                'profil' => $profil,
                'peran' => $peran,

            );

            $this->M_profil->simpan_data($data, 'tb_profil');
            redirect('admin/profil');
        }
    }
    public function pengelola()
    {
        $data = array(
            'opd' => $this->M_opd->tampil_data()->result(),
            'judul' => 'Profil | Pengelola',
            'pengelola' => $this->M_profil->getAllPengelola()->result(),

        );
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/profil/pengelola', $data);
        $this->load->view('admin/layout/footer');
    }
    public function tambah_pengelola()
    {
        $data = array(
            'opd' => $this->M_opd->tampil_data()->result(),
            'judul' => 'Tambah | Pengelola',

            'role' => $this->M_user->tampil_role(),
            'fakultas' => $this->M_master->tampil_fakultas()->result(),

        );
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/profil/add_pengelola', $data);
        $this->load->view('admin/layout/footer');
    }
    public function simpan_pengelola()
    {
        $this->load->library('form_validation');
        $data = array();
        $this->form_validation->set_rules('input_gambar', 'input', 'required');
        $this->form_validation->set_rules('nip', 'nip', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();

            if ($this->input->post('submit')) {
                $upload = $this->M_profil->upload();

                if ($upload['result'] == "success") {
                    $this->M_profil->save($upload);
                    $data = $this->session->set_flashdata('pesan', ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>horeee !</strong> data berhasil ditambahkan
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');

                    redirect('admin/profil/pengelola', $data);
                } else {
                    $data['message'] = $upload['error'];
                }
            }
        } else {
            redirect('admin/profil');
        }
        $data = $this->session->set_flashdata('pesan', ' <div class="alert alert-warning" role="alert">format foto harus jpg | png  </div>');

        redirect('admin/profil/tambah_pengelola' . $data);
    }
}
