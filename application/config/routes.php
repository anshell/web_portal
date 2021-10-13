<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/**
 * Routes Backend
 */

// routes login
$route['auth'] = 'auth';
$route['auth/daftar'] = '';
$route['auth/login'] = 'auth/login';
$route['auth/logout'] = 'auth/logout';


// routes admin
$route['admin'] = 'admin';

//routes Operator
$route['operator'] = 'operator';

//routes Master Data
$route['admin/master'] = 'master';
$route['admin/master/jurusan'] = 'master/jurusan';
$route['admin/master/prodi'] = 'master/prodi';


//routes Admin Master User
$route['admin/user'] = 'user';
$route['admin/user/tambah_user'] = 'user/tambah_user';
$route['admin/user/simpan'] = 'user/simpan';


// profil Admin routes
$route['admin/profil'] = 'profil';
$route['admin/profil/add'] = 'profil/tambah';
$route['admin/profil/simpan'] = 'profil/simpan_profil';
$route['admin/profil/pengelola'] = 'profil/pengelola';
$route['admin/profil/tambah'] = 'profil/tambah_pengelola';
$route['admin/profil/simpan_pengelola'] = 'profil/simpan_pengelola';
$route['admin/profil/edit/(:num)'] = 'profile/edit/$1';
$route['admin/profil/update'] = 'profile/update';


// organisai routes
$route['admin/profil/organisasi'] = 'organisasi';
$route['admin/profil/organisasi/edit/(:num)'] = 'organisasi/edit/$1';
$route['admin/profil/organisasi/update'] = 'organisasi/update';

// routes program Kampus Merdeka
$route['admin/program'] = 'programkampus';
$route['admin/program/cari_jurusan'] = 'programkampus/cari_jurusan';
$route['admin/program/cari_prodi'] = 'programkampus/cari_prodi';
$route['admin/program/add_magang'] = 'programkampus/add_magang';
$route['admin/program/form_upload'] = 'programkampus/form_upload';
$route['admin/program/form_pob'] = 'programkampus/form_pob';
$route['admin/program/upload_sop'] = 'programkampus/upload_sop';
$route['admin/program/upload_pob'] = 'programkampus/upload_pob';
$route['admin/program/simpan_magang'] = 'programkampus/simpan_magang';
$route['admin/program/magang/edit/(:num)'] = 'programkampus/edit_magang/$1';
$route['admin/program/magang/update'] = 'programkampus/update_magang';
$route['admin/program/magang/delete/(:num)'] = 'programkampus/magang_hapus/$1';

$route['admin/program/mengajar'] = 'programkampus/mengajar';
$route['admin/program/penelitian'] = 'programkampus/penelitian';
$route['admin/program/wirausaha'] = 'programkampus/wirausaha';
$route['admin/program/pertukaran'] = 'programkampus/pertukaran';
$route['admin/program/kemanusiaan'] = 'programkampus/kemanusiaan';
$route['admin/program/belanegara'] = 'programkampus/belanegara';
$route['admin/program/proyekdesa'] = 'programkampus/proyekdesa';
$route['admin/program/proyekindependen'] = 'programkampus/proyekindependen';








// visi routes
$route['admin/profil/visi'] = 'visi';
$route['admin/profil/visi/edit/(:num)'] = 'visi/edit/$1';
$route['admin/profil/visi/update'] = 'visi/update';

// misi routes
$route['admin/profil/misi'] = 'misi';
$route['admin/profil/misi/buat'] = 'misi/tambah';
$route['admin/profil/misi/simpan'] = 'misi/simpan';
$route['admin/profil/misi/edit/(:num)'] = 'misi/edit/$1';
$route['admin/profil/misi/update'] = 'misi/update';
$route['admin/profil/misi/delete/(:num)'] = 'misi/hapus/$1';



// routes publikasi kategori
$route['admin/publikasi/kategori'] = 'pubkat';
$route['admin/publikasi/kategori/simpan'] = 'pubkat/simpan';
$route['admin/publikasi/kategori/edit/(:num)'] = 'pubkat/edit/$1';
$route['admin/publikasi/kategori/update'] = 'pubkat/update';
$route['admin/publikasi/kategori/hapus/(:num)'] = 'pubkat/hapus/$1';

// routes publikasi data
$route['admin/publikasi/data'] = 'publikasi';
$route['admin/publikasi/simpan'] = 'publikasi/simpan';
$route['admin/publikasi/edit/(:num)'] = 'publikasi/edit/$1';
$route['admin/publikasi/update'] = 'publikasi/update';
$route['admin/publikasi/hapus/(:num)'] = 'publikasi/hapus/$1';
$route['admin/publikasi/gtfile'] = 'publikasi/gtfile';


// routes galery kategori
$route['admin/galery/kategori'] = 'galkat';
$route['admin/galery/kategori/simpan'] = 'galkat/simpan';
$route['admin/galery/kategori/edit/(:num)'] = 'galkat/edit/$1';
$route['admin/galery/kategori/update'] = 'galkat/update';
$route['admin/galery/kategori/hapus/(:num)'] = 'galkat/hapus/$1';

// routes galery data
$route['admin/galery/data'] = 'galery';
$route['admin/galery/buat'] = 'galery/tambah';
$route['admin/galery/simpan'] = 'galery/simpan';
$route['admin/galery/edit/(:num)'] = 'galery/edit/$1';
$route['admin/galery/update'] = 'galery/update';
$route['admin/galery/hapus/(:num)'] = 'galery/hapus/$1';
$route['admin/galery/gtfile'] = 'galery/gtfile';

// routes unitkerja kategori
$route['admin/unitkerja/kategori'] = 'unitkat';
$route['admin/unitkerja/kategori/simpan'] = 'unitkat/simpan';
$route['admin/unitkerja/kategori/edit/(:num)'] = 'unitkat/edit/$1';
$route['admin/unitkerja/kategori/update'] = 'unitkat/update';
$route['admin/unitkerja/kategori/hapus/(:num)'] = 'unitkat/hapus/$1';


// routes publikasi data
$route['admin/unitkerja/data'] = 'unit';
$route['admin/unitkerja/tambah'] = 'unit/tambah';
$route['admin/unitkerja/simpan'] = 'unit/simpan';
$route['admin/unitkerja/edit/(:num)'] = 'unit/edit/$1';
$route['admin/unitkerja/update'] = 'unit/update';
$route['admin/unitkerja/hapus/(:num)'] = 'unit/hapus/$1';

// routes profil opd
$route['admin/pengaturan/profilopd'] = 'opd';
$route['admin/pengaturan/profilopd/update'] = 'opd/update';
$route['admin/pengaturan/profilopd/ubahlogo'] = 'opd/gtlogo';

// routes profil opd
$route['admin/pengaturan/slider'] = 'slider';
$route['admin/pengaturan/tambah'] = 'slider/tambah';
$route['admin/pengaturan/slider/simpan'] = 'slider/simpan';
$route['admin/pengaturan/edit/(:num)'] = 'slider/edit/$1';
$route['admin/pengaturan/update'] = 'slider/update';
$route['admin/pengaturan/hapus/(:num)'] = 'slider/hapus/$1';

// routes berita kategori
$route['admin/berita/kategori'] = 'beritakat';
$route['admin/berita/kategori/simpan'] = 'beritakat/simpan';
$route['admin/berita/kategori/edit/(:num)'] = 'beritakat/edit/$1';
$route['admin/berita/kategori/update'] = 'beritakat/update';
$route['admin/berita/kategori/hapus/(:num)'] = 'beritakat/hapus/$1';

// routes berita buat
$route['admin/berita/data'] = 'buatberita';
$route['admin/berita/post'] = 'buatberita/buat';
$route['admin/berita/posting'] = 'buatberita/posting';
$route['admin/berita/post/hapus/(:num)'] = 'buatberita/hapus/$1';
$route['admin/berita/post/edit/(:num)'] = 'buatberita/editberita/$1';
$route['admin/berita/update'] = 'buatberita/updateberita';
$route['admin/berita/updatefotoberita'] = 'buatberita/updateberitafoto';


/**
 * Routet Frontend
 */
// route Home website
$route['home/berita'] = 'berita';
$route['home/sejarah'] = 'tentang';
$route['home/struktur-organisasi'] = 'struktur';
$route['home/visi-misi'] = 'visi_misi';
$route['home/pengurus'] = 'team';

$route['about'] = 'about';
// $route['program'] = 'magang';
// $route['about/pengelola'] = 'pengelola';

$route['galery/(:any)'] = 'homeGalery/show/$1';
$route['publikasi/(:any)'] = 'homepub/show/$1';
$route['unitkerja/(:any)'] = 'homeunit/show/$1';
$route['home/berita/post/(:any)'] = 'home/show/$1';
$route['home/all/berita'] = 'home/all';


// route pengumuman
$route['admin/pengumuman'] = 'pengumuman';
