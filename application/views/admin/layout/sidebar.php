<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="<?= base_url('assets/vendor/logo/avat.png'); ?>" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="<?= base_url('assets/vendor/logo/avat.png'); ?>" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0"><?= $this->session->userdata('username'); ?></h6>
            <span class="pro-user-desc">Administrator</span>
            <a href="<?php echo site_url('auth/logout') ?>" class="btn btn-danger btn-xs">
                <!-- <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i> -->
                <span>Logout</span>
            </a>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <div class="dropdown-divider"></div>

                <a href="<?php echo site_url('auth/logout') ?>" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li>
                    <a href="<?= site_url('admin') ?>">
                        <i data-feather="home"></i>
                        <span class="badge badge-success float-right"></span>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li class="menu-title">Data Master</li>
                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="inbox"></i>
                        <span> Unit Kerja </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="<?= site_url('admin/master') ?>">Fakultas</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/master/jurusan') ?>">Jurusan</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/master/prodi') ?>">Program Studi</a>
                        </li>

                    </ul>
                </li>
                <li class="menu-title">Data Program</li>
                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="inbox"></i>
                        <span> Program KM </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <?php


                        $allpo = $this->db->query("SELECT * FROM tb_program");

                        foreach ($allpo->result() as $li) { ?>
                            <li>
                                <a href="<?= site_url($li->link_url) ?>"><?= $li->nama_program; ?></a>
                            </li>

                        <?php } ?>
                    </ul>
                </li>
                <li class="menu-title">Data Website</li>
                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="inbox"></i>
                        <span> Berita </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="<?= site_url('admin/berita/data') ?>">Buat Berita</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/berita/kategori') ?>">Kategori Berita</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="inbox"></i>
                        <span> Profil </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">

                        <li>
                            <a href="<?= site_url('admin/profil') ?>">Profil dan Peranan</a>
                        </li>

                        <li>
                            <a href="<?= site_url('admin/profil/pengelola') ?>">Pengelola Program</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="inbox"></i>
                        <span> Publikasi </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="<?= site_url('admin/publikasi/kategori') ?>">Kategori Publikasi</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/publikasi/data') ?>">Data Publikasi</a>
                        </li>



                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="inbox"></i>
                        <span> Galeri </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="<?= site_url('admin/galery/kategori') ?>">Kategori Galeri</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/galery/data') ?>">Galeri Kegiatan</a>
                        </li>



                    </ul>
                </li>


                <!-- <li>
                    <a href="javascript: void(0);">
                        <i data-feather="inbox"></i>
                        <span> Unit Kerja </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="<?= site_url('admin/unitkerja/kategori') ?>">Kategori Unitkerja</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/unitkerja/data') ?>">Data Unitkerja</a>
                        </li>

                    </ul>
                </li> -->
                <li class="menu-title">Pengaturan</li>
                <li>
                    <a href="<?= site_url('admin/user') ?>">
                        <i data-feather="user"></i>
                        <span> Pengguna</span>
                    </a>
                </li>

                <li>
                    <a href="<?= site_url('admin/pengaturan/profilopd') ?>">
                        <i data-feather="calendar"></i>
                        <span> Profil Website </span>
                    </a>
                </li>

                <li>
                    <a href="<?= site_url('admin/pengaturan/slider') ?>">
                        <i data-feather="calendar"></i>
                        <span> Slider Website</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>