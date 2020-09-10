<body class="body-color">
    <!-- top bar start -->
    <section class="top-bar top-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center md-center-item">
                    <div class="ts-temperature">
                        <i class="icon-weather"></i>
                        <span>28.8
                            <b>c</b>
                        </span>
                        <span>Pekanbaru, Indonesia</span>

                    </div>

                    <ul class="ts-top-nav">

                    </ul>

                </div>
                <!-- end col-->

                <div class="col-lg-6 text-right align-self-center">
                    <ul class="top-social">
                        <li>

                        </li>
                        <li class="ts-date">
                            <i class="fa fa-clock-o"></i>
                            <?= $now ?>
                        </li>
                    </ul>
                </div>
                <!--end col -->


            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- end top bar-->


    <!-- header nav start-->
    <header class="navbar-standerd nav-bar-dark">
        <div class="container">
            <div class="row">

                <!-- logo end-->
                <div class="col-lg-12">
                    <!--nav top end-->
                    <nav class="navigation ts-main-menu navigation-landscape">
                        <div class="nav-header">
                            <a class="nav-brand" href="#">
                                <img src="<?= base_url('assets/vendor/'); ?>logo/logos.png" width="80" height="70" alt="">
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
                                    <a href="<?= site_url('home') ?>">Home</a>
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
                                            <a href="<?= site_url('home/sejarah') ?>">Sejarah</a>

                                        </li>
                                        <li>
                                            <a href="<?= site_url('home/struktur-organisasi') ?>">Struktur Organisasi</a>

                                        </li>

                                        <li>
                                            <a href="<?= site_url('home/visi-misi'); ?>">Visi dan Misi</a>

                                        </li>


                                        <!--Pages end-->
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cabor</a>
                                    <ul class="nav-dropdown">
                                        <li>
                                            <a href="#">Induk Organisasi</a>

                                        </li>
                                        <li>
                                            <a href="#">Atlit</a>

                                        </li>

                                        <li>
                                            <a href="#">Pelatih</a>

                                        </li>


                                        <!--Pages end-->
                                    </ul>
                                </li>
                                <li class="<?php
                                            if ($status == '4') {
                                                echo "$aktif";
                                            } else {
                                                echo '';
                                            }

                                            ?>">
                                    <a href="<?= site_url('home/pengurus') ?>">Pengurus</a>
                                </li>

                                <li>
                                    <a href="#">Galery</a>
                                    <ul class="nav-dropdown">
                                        <?php

                                        foreach ($galkat as $r) {
                                        ?>
                                            <li>
                                                <a href="#"><?php echo $r->nama_galkat ?></a>

                                            </li>
                                        <?php } ?>


                                        <!--Pages end-->
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Publikasi</a>
                                    <ul class="nav-dropdown">
                                        <?php

                                        foreach ($pubkat as $r) {
                                        ?>
                                            <li>
                                                <a href="#"><?php echo $r->nama_kat ?></a>

                                            </li>
                                        <?php } ?>


                                        <!--Pages end-->
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Sipatriot</a>
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
    <!-- header nav end-->