<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProgramKampus extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_program');
        $this->load->model('M_master');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('upload');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }
    public function index()
    {

        $data['judul'] = 'Program Kampus Merdeka | Data';

        $data['magang'] = $this->M_program->tampil_data_magang()->result();

        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/program/magang', $data);
        $this->load->view('admin/layout/footer');
    }
    public function cari_jurusan()
    {
        $param = $this->input->post('kfak');
        $data = $this->M_master->getJur($param);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    public function cari_prodi()
    {
        $param = $this->input->post('kjur');
        $data = $this->M_master->getProdi($param);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function form_upload()
    {
        $id = $this->input->get('kfak');

        $data_array = array(
            'id' => $id,
            'upload' => $this->M_program->viewby_id_fak($id)
        );
        $this->load->view('admin/program/form_upload', $data_array);
    }
    public function form_pob()
    {
        $id = $this->input->get('kfak');

        $data_array = array(
            'id' => $id,
            'upload' => $this->M_program->viewby_id_fak($id)
        );
        $this->load->view('admin/program/form_pob', $data_array);
    }
    public function upload_sop()
    {

        $json = array();

        // Define file rules
        $config['upload_path'] = './berkas/filemagang'; //path folder
        $config['allowed_types'] = 'pdf|png|jpeg|jpg|docx|doc'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $this->load->library('upload', $config);
        $initialize = $this->upload->initialize($config);
        if (!$this->upload->do_upload('upl_file')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
            $json = 'failed';
        } else {
            $data = $this->upload->data();
            $imagename = $data['file_name'];
            $data1 = array(
                'file_sop' => $imagename,
                'kfak' => $this->input->post('kfak'),
                'kpst' => $this->input->post('kpst'),
                'upload_by' => $this->session->userdata('username')

            );
            $result = $this->M_program->save_sop($data1);
            if ($result == TRUE) {
                $json = 'success';
            }
        }
        header('Content-Type: application/json');
        echo json_encode($json);
    }
    public function upload_pob()
    {

        $json = array();

        // Define file rules
        $config['upload_path'] = './berkas/filemagang'; //path folder
        $config['allowed_types'] = 'pdf|png|jpeg|jpg|docx|doc'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $this->load->library('upload', $config);
        $initialize = $this->upload->initialize($config);
        if (!$this->upload->do_upload('upl_file')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
            $json = 'failed';
        } else {
            $data = $this->upload->data();
            $imagename = $data['file_name'];
            $data1 = array(
                'file_pob' => $imagename,
                'kfak' => $this->input->post('kfak'),
                'kpst' => $this->input->post('kpst'),
                'uploadpob_by' => $this->session->userdata('username')
            );
            $result = $this->M_program->save_pob($data1);
            if ($result == TRUE) {
                $json = 'success';
            }
        }
        header('Content-Type: application/json');
        echo json_encode($json);
    }
    /**
     * Program Magang
     * 
     */

    public function add_magang()
    {

        $data['judul'] = 'Magang | Tambah Data';
        $data['allprog'] = $this->M_program->tampil_data()->result();
        $data['fakultas'] = $this->M_master->tampil_fakultas()->result();

        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/program/add_magang', $data);
        $this->load->view('admin/layout/footer');
    }
    public function edit_magang($id)
    {

        $data['judul'] = 'Edit | Tambah Data';
        $data['allprog'] = $this->M_program->tampil_data()->result();
        $data['fakultas'] = $this->M_master->tampil_fakultas()->result();
        $data['magang'] = $this->M_program->viewby_id_magang($id);

        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/program/edit_magang', $data);
        $this->load->view('admin/layout/footer');
    }


    public function simpan_magang()
    {

        $config['upload_path']          = './berkas/filemagang/';
        $config['allowed_types']        = 'pdf|jpg|png|jpeg';
        $config['encrypt_name']         = TRUE;


        // $file_encode = base64_encode($imgdata);
        $data['rencana']        = $this->input->post('rencana');
        $data['kfak']           = $this->input->post('kfak');
        $data['kpst']           = $this->input->post('kpst');
        $data['create_by']      = $this->session->userdata('username');
        $data['create_date']    = date('y-m-d');
        $data['publish']           = $this->input->post('publish');

        $this->db->insert('tb_magang', $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('admin/program', 'refresh');
    }
    public function update_magang()
    {

        $config['upload_path']          = './berkas/filemagang/';
        $config['allowed_types']        = 'pdf|jpg|png|jpeg';
        $config['encrypt_name']         = TRUE;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('error', 'Opss! gagal upload data,</strong> pastikan format file berekstensi .pdf');
            redirect('admin/program/add_magang');
        } else {
            $image_data = $this->upload->data();
            $imgdata = file_get_contents($image_data['full_path']);
            // $file_encode = base64_encode($imgdata);
            $unlinkdata = array(
                'file_sop' => $this->input->post('file_sop'),
                'file_pob' => $this->input->post('file_pob'),
                'file_img' => $this->input->post('file_img'),
            );
            @unlink("./berkas/filemagang/" . $unlinkdata);
            $id = $this->input->post('idmagang');
            $data = array(
                'rencana' => $this->input->post('rencana'),
                'file_sop' => $this->upload->data('file_name'),
                'file_pob' => $this->upload->data('file_name'),
                'file_img' => $this->upload->data('file_name'),
                'kfak' => $this->input->post('kfak'),
                'create_by' => $this->input->post('create_by'),
                'create_date' => $this->input->post('create_date'),
                'publish' => $this->input->post('publish'),

            );

            $where = array(
                'idmagang' => $id
            );

            $this->M_program->update_data($where, $data, 'tb_magang');
            $this->session->set_flashdata('success', 'Data berhasil diperbaiki');
            redirect('admin/program');
        }
    }
    //End Magang
    public function mengajar()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Pegawai | Tambah Data';
        $data['allprog'] = $this->M_program->tampil_data()->result();


        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/program/mengajar', $data);
        $this->load->view('admin/layout/footer');
    }

    public function wirausaha()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Program Wirausaha | List Program';
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/program/wirausaha', $data);
        $this->load->view('admin/layout/footer');
    }
    public function pertukaran()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Program Pertukaran | List Program';
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/program/pertukaran', $data);
        $this->load->view('admin/layout/footer');
    }
    public function kemanusiaan()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Program Kemanusiaan | List Program';
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/program/kemanusiaan', $data);
        $this->load->view('admin/layout/footer');
    }
    public function proyekindependen()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Program Kemanusiaan | List Program';
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/program/proyekindependen', $data);
        $this->load->view('admin/layout/footer');
    }
    public function penelitian()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Program Kemanusiaan | List Program';
        $this->load->view('admin/layout/head', $data);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/program/penelitian', $data);
        $this->load->view('admin/layout/footer');
    }
}
