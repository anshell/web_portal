<?php
function cmb_dinamis($name, $table, $field, $pk, $selected = null, $extra = null, $id = null)
{
  $ci = &get_instance();
  $cmb = "<select name='$name' class='form-control' $extra $id>";
  $data = $ci->db->get($table)->result();
  foreach ($data as $row) {
    $cmb .= "<option value='" . $row->$pk . "'";
    $cmb .= $selected == $row->$pk ? 'selected' : '';
    $cmb .= ">" . $row->$field . "</option>";
  }
  $cmb .= "</select>";
  return $cmb;
}

function get_tahun_akademik_aktif($field)
{
  $ci = &get_instance();
  $ci->db->where('is_aktif', 'y');
  $tahun = $ci->db->get('tbl_tahun_akademik')->row_array();
  return $tahun[$field];
}

function ambilPaket($id)
{
  $ci = &get_instance();
  $npaket = $ci->db->get_where('tbl_paket', array('id' => $id));
  if ($npaket->num_rows() > 0) {
    $row = $npaket->row_array();
    return $row['nama_paket'];
  } else {
    return 0;
  }
}
function getNILAI($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tbl_nilai WHERE nim='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row();
  return $row;
}
function ambilNilai($id)
{
  $ci = &get_instance();
  $nnilai = $ci->db->get_where('tbl_nilai', array('idmateri' => $id));
  if ($nnilai->num_rows() > 0) {
    $row = $nnilai->row_array();
    return $row['nilai'];
  } else {
    return 0;
  }
}
function getAkses($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tbl_user WHERE username='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row();
  return $row;
}
function getNamaBid($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tbl_bidang JOIN users ON users.id_bidang = tbl_bidang.kodebid WHERE users.id_bidang='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['nama_bidang'];
}
function getNamaBidMhs($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT nama_bidang FROM tbl_bidang JOIN tbl_mahasiswa ON tbl_mahasiswa.idbidang = tbl_bidang.kodebid WHERE tbl_mahasiswa.nim='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['nama_bidang'];
}
function getReject($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tbl_reject WHERE nim='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  if ($query->num_rows() > 0) {
    echo '<button class="btn btn-xs btn-danger" onclick="showR(' . $row['nim'] . ')"> <i class="fa fa-times"></i> Judul ditolak</button>';
  } else {
    return false;
  }
}

function getRuanganSeminar($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tbl_ruang JOIN tbl_seminarhasil ON tbl_ruang.idruang = tbl_seminarhasil.tempat WHERE tbl_seminarhasil.tempat='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['nama_ruangan'];
}
function getRuanganSkripsi($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tbl_ruang JOIN tbl_skripsi ON tbl_ruang.idruang = tbl_skripsi.tempat WHERE tbl_skripsi.tempat='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['nama_ruangan'];
}
function getNomorSurat()
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tbl_nomorsurat";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['nomor'];
}
function FileSOPMagang($kfak)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM file_sopmagang WHERE kfak='$kfak' AND file_sop !=''";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  if ($query->num_rows() > 0) {
    return $row['file_sop'];
  }
}

function logo()
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tb_opd";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['file'];
}
function titelfront()
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tb_opd";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['nama_pendek'];
}
function showinformasi()
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM tb_informasi WHERE setaktif='1'";
  $query = $ci->db->query($sql);
  $row = $query->result_array();
  foreach ($row as $info) {
    echo '<div class="breaking-post-content">';
    echo '<p>' . $info['informasi'] . '</p>&nbsp;&nbsp;&nbsp;';

    echo '</div>';
  }
}

function FilePOBMagang($kfak)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM file_pobmagang WHERE kfak='$kfak' AND file_pob !=''";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  if ($query->num_rows() > 0) {
    return $row['file_pob'];
  }
}

function FileSeminar($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM file_seminar WHERE nim='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['file_seminar'];
}
function FileSkripsi($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM file_skripsi WHERE nim='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['file_skripsi'];
}
function FileHasil($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM file_hasil WHERE nim='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['file_hasil'];
}
function FilePengajuan($id)
{
  $ci = &get_instance();
  $ci->load->database();
  $sql = "SELECT * FROM file_pengajuan WHERE nim='$id'";
  $query = $ci->db->query($sql);
  $row = $query->row_array();
  return $row['file_pengajuan'];
}
//End Pemanggilan skripsi


function Terbilang($x)
{
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return Terbilang($x - 10) . "belas";
  elseif ($x < 100)
    return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
  elseif ($x < 200)
    return " seratus" . Terbilang($x - 100);
  elseif ($x < 1000)
    return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
  elseif ($x < 2000)
    return " seribu" . Terbilang($x - 1000);
  elseif ($x < 1000000)
    return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
  elseif ($x < 1000000000)
    return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
}
if (!function_exists('tanggal_indonesia')) {
  function tanggal_indonesia($tanggal)
  {
    $ubahTanggal = gmdate($tanggal, time() + 60 * 60 * 8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulan_panjang($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
  }
}

if (!function_exists('tanggal_indonesia_lengkap')) {
  function tanggal_indonesia_lengkap($tanggal)
  {
    $ubahTanggal = gmdate($tanggal, time() + 60 * 60 * 8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = $pecahTanggal[1];
    $tahun = $pecahTanggal[0];
    $namaHari = nama_hari(date('l', mktime(0, 0, 0, $bulan, $tanggal, $tahun)));
    return $namaHari . ', ' . $tanggal . ' ' . bulan_panjang($bulan) . ' ' . $tahun;
  }
}

if (!function_exists('tanggal_indonesia_medium')) {
  function tanggal_indonesia_medium($tanggal)
  {
    $ubahTanggal = gmdate($tanggal, time() + 60 * 60 * 8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulan_pendek($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
  }
}

if (!function_exists('tanggal_indonesia_pendek')) {
  function tanggal_indonesia_pendek($tanggal)
  {
    $ubahTanggal = gmdate($tanggal, time() + 60 * 60 * 8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulan_angka($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal . '/' . $bulan . '/' . $tahun;
  }
}

if (!function_exists('bulan_panjang')) {
  function bulan_panjang($bulan)
  {
    switch ($bulan) {
      case 1:
        return 'Januari';
        break;
      case 2:
        return 'Februari';
        break;
      case 3:
        return 'Maret';
        break;
      case 4:
        return 'April';
        break;
      case 5:
        return 'Mei';
        break;
      case 6:
        return 'Juni';
        break;
      case 7:
        return 'Juli';
        break;
      case 8:
        return 'Agustus';
        break;
      case 9:
        return 'September';
        break;
      case 10:
        return 'Oktober';
        break;
      case 11:
        return 'November';
        break;
      case 12:
        return 'Desember';
        break;
    }
  }
}

if (!function_exists('bulan_pendek')) {
  function bulan_pendek($bulan)
  {
    switch ($bulan) {
      case 1:
        return 'Jan';
        break;
      case 2:
        return 'Feb';
        break;
      case 3:
        return 'Mar';
        break;
      case 4:
        return 'Apr';
        break;
      case 5:
        return 'Mei';
        break;
      case 6:
        return 'Jun';
        break;
      case 7:
        return 'Jul';
        break;
      case 8:
        return 'Agu';
        break;
      case 9:
        return 'Sep';
        break;
      case 10:
        return 'Okt';
        break;
      case 11:
        return 'Nov';
        break;
      case 12:
        return 'Des';
        break;
    }
  }
}

if (!function_exists('bulan_angka')) {
  function bulan_angka($bulan)
  {
    switch ($bulan) {
      case 1:
        return '01';
        break;
      case 2:
        return '02';
        break;
      case 3:
        return '03';
        break;
      case 4:
        return '04';
        break;
      case 5:
        return '05';
        break;
      case 6:
        return '06';
        break;
      case 7:
        return '07';
        break;
      case 8:
        return '08';
        break;
      case 9:
        return '09';
        break;
      case 10:
        return '10';
        break;
      case 11:
        return '11';
        break;
      case 12:
        return '12';
        break;
    }
  }
}

if (!function_exists('nama_hari')) {
  function nama_hari($hari)
  {
    if ($hari == 'Sunday') {
      return 'Minggu';
    } elseif ($hari == 'Monday') {
      return 'Senin';
    } elseif ($hari == 'Tuesday') {
      return 'Selasa';
    } elseif ($hari == 'Wednesday') {
      return 'Rabu';
    } elseif ($hari == 'Thursday') {
      return 'Kamis';
    } elseif ($hari == 'Friday') {
      return 'Jumat';
    } elseif ($hari == 'Saturday') {
      return 'Sabtu';
    }
  }
}
