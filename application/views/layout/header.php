<body>
    <div class="body-inner-content">
        <!-- header nav start-->
        <header class="navbar-standerd">
            <div class="container">
                <div class="row">

                    <!-- logo end-->
                    <div class="col-lg-12">
                        <!--nav top end-->
                        <nav class="navigation ts-main-menu navigation-landscape">
                            <div class="nav-header">
                                <a class="nav-brand" href="#">
                                    <?php foreach ($opd as $r) { ?>
                                        <img src="<?= base_url('berkas/icon/') . $r->file; ?>" width="310" height="70" alt=""><?php } ?>
                                </a>
                                <div class="nav-toggle"></div>
                            </div>
                            <!--nav brand end-->

                            <div class="nav-menus-wrapper clearfix">
                                <!--nav right menu start-->
                                <ul class="right-menu align-to-right">

                                    <li class="header-search">
                                        <div class="nav-search">
                                            <div class="nav-search-button">
                                                <i class="icon icon-search"></i>
                                            </div>
                                            <form>
                                                <span class="nav-search-close-button" tabindex="0">✕</span>
                                                <div class="nav-search-inner">
                                                    <input type="search" name="search" placeholder="Type and hit ENTER">
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                                <!--nav right menu end-->

                                <!-- nav menu start-->
                                <ul class="nav-menu align-to-right">
                                    <li class="<?php
                                                if ($status == '1') {
                                                    echo "$aktif ";
                                                } else {
                                                    echo '';
                                                }

                                                ?>">
                                        <a href="<?= site_url('home') ?>">Beranda</a>
                                    </li>

                                    <li class="<?php
                                                if ($status == '2') {
                                                    echo "$aktif";
                                                } else {
                                                    echo '';
                                                }

                                                ?>">
                                        <a href="#">Tentang Kami</a>
                                        <ul class="nav-dropdown">
                                            <li>
                                                <a href="<?= site_url('about') ?>">Profil</a>

                                            </li>
                                            <li>
                                                <a href="<?= site_url('about/peran') ?>">Peran</a>

                                            </li>

                                            <li>
                                                <a href="<?= site_url('about/pengelola'); ?>">Pengelola Program</a>

                                            </li>



                                            <!--Pages end-->
                                        </ul>
                                    </li>
                                    <!-- <li class="<?php
                                                    if ($status == '3') {
                                                        echo "$aktif";
                                                    } else {
                                                        echo '';
                                                    }

                                                    ?>">
                                        <a href="#">Program</a>
                                        <ul class="nav-dropdown">
                                            <li>
                                                <a href="<?= site_url('program') ?>">Magang Mahasiswa</a>

                                            </li>
                                            <li>
                                                <a href="<?= site_url('program/mengajar') ?>">Mengajar disekolah</a>

                                            </li>

                                            <li>
                                                <a href="<?= site_url('program/kkn'); ?>">KKN Tematik/Proyek di Desa</a>

                                            </li>
                                            <li>
                                                <a href="<?= site_url('program/wirausaha'); ?>">Kegiatan Wirausaha</a>

                                            </li>
                                            <li>
                                                <a href="<?= site_url('program/pertukaran'); ?>">Pertukaran Pelajar</a>

                                            </li>
                                            <li>
                                                <a href="<?= site_url('program/studi'); ?>">Studi/Proyek Independen</a>

                                            </li>

                                            <li>
                                                <a href="<?= site_url('program/penelitian'); ?>">Penelitian</a>

                                            </li>
                                            <li>
                                                <a href="<?= site_url('program/kemanusiaan'); ?>">Proyek Kemanusiaan</a>

                                            </li>
                                            <li>
                                                <a href="<?= site_url('program/belanegara'); ?>">Bela Negara</a>

                                            </li>
                                            
                                </ul>
                                </li> -->



                                    <li class="<?php
                                                if ($status == '5') {
                                                    echo "$aktif";
                                                } else {
                                                    echo '';
                                                }

                                                ?>">
                                        <a href="#">Galery</a>
                                        <ul class="nav-dropdown">
                                            <?php

                                            foreach ($galkat as $r) {
                                            ?>
                                                <li>
                                                    <a href="<?= site_url('galery/') . $r->slug ?>"><?php echo $r->nama_galkat ?></a>

                                                </li>
                                            <?php } ?>


                                            <!--Pages end-->
                                        </ul>
                                    </li>
                                    <li class="<?php
                                                if ($status == '6') {
                                                    echo "$aktif";
                                                } else {
                                                    echo '';
                                                }

                                                ?>">
                                        <a href="#">Publikasi</a>
                                        <ul class="nav-dropdown">
                                            <?php

                                            foreach ($pubkat as $r) {
                                            ?>
                                                <li>
                                                    <a href="<?= site_url('publikasi/') . $r->slug ?>"><?php echo $r->nama_kat ?></a>

                                                </li>
                                            <?php } ?>


                                            <!--Pages end-->
                                        </ul>
                                    </li>

                                </ul>
                                <!--nav menu end-->
                            </div>
                        </nav>
                        <!-- nav end-->
                    </div>
                </div>
            </div>
        </header>