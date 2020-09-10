<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="<?= base_url('assets/'); ?>assets/images/users/avatar.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="<?= base_url('assets/'); ?>assets/images/users/avatar.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0"><?= $user['nama'] ?></h6>
            <span class="pro-user-desc">Administrator</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <a href="#" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>My Account</span>
                </a>

                <a href="#" class="dropdown-item notify-item">
                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                    <span>Settings</span>
                </a>



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
                        <span> Profil </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="<?= site_url('admin/profil/sejarah') ?>">Sejarah</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/profil/organisasi') ?>">Struktur Organisasi</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/profil/visi') ?>">Visi</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/profil/misi') ?>">Misi</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="<?= site_url('admin/pengurus/data') ?>">
                        <i data-feather="calendar"></i>
                        <span> Pegawai </span>
                    </a>
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


                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="inbox"></i>
                        <span> Unit Kerja </span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="email-inbox.html">Kategori Unitkerja</a>
                        </li>
                        <li>
                            <a href="email-read.html">Data Unitkerja</a>
                        </li>

                    </ul>
                </li>
                <li class="menu-title">Data Berita</li>
                <li>
                    <a href="apps-calendar.html">
                        <i data-feather="calendar"></i>
                        <span> Berita </span>
                    </a>
                </li>
                <li>
                    <a href="apps-calendar.html">
                        <i data-feather="calendar"></i>
                        <span> Kategori Berita </span>
                    </a>
                </li>
                <li>
                    <a href="apps-calendar.html">
                        <i data-feather="calendar"></i>
                        <span> Tag Berita </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>