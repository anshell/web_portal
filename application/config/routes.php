<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// routes login
$route['auth'] = 'auth';
$route['auth/daftar'] = 'auth/daftar';
$route['auth/login'] = 'auth/login';
$route['auth/logout'] = 'auth/logout';


// routes admin
$route['admin'] = 'admin';


// sejarah routes
$route['admin/profil/sejarah'] = 'sejarah';
$route['admin/profil/sejarah/edit/(:num)'] = 'sejarah/edit/$1';
$route['admin/profil/sejarah/update'] = 'sejarah/update';


// organisai routes
$route['admin/profil/organisasi'] = 'organisasi';
$route['admin/profil/organisasi/edit/(:num)'] = 'organisasi/edit/$1';
$route['admin/profil/organisasi/update'] = 'organisasi/update';


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

// routes pengurus
$route['admin/pengurus/data'] = 'pengurus';
$route['admin/pengurus/buat'] = 'pengurus/tambah';
$route['admin/pengurus/simpan'] = 'pengurus/simpan';
$route['admin/pengurus/edit/(:num)'] = 'pengurus/edit/$1';
$route['admin/pengurus/update'] = 'pengurus/update';
$route['admin/pengurus/gtfoto'] = 'pengurus/gtfoto';

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


// route berita
$route['home/berita'] = 'berita';
$route['home/sejarah'] = 'tentang';
$route['home/struktur-organisasi'] = 'struktur';
$route['home/visi-misi'] = 'visi_misi';
$route['home/pengurus'] = 'team';


// route pengumuman
$route['admin/pengumuman'] = 'pengumuman';
