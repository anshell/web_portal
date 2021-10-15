<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-3">Program Kampus Merdeka</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-info btn-xs mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-info btn-xs mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <?php $i = 0;

                                foreach ($prog as $row) : ?>
                                    <?php if ($i == 0) {
                                        $set_ = 'active';
                                    } else {
                                        $set_ = '';
                                    } ?>
                                    <div class='carousel-item <?= $set_; ?>'>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="<?= site_url('program/') . $row->slug ?>">
                                                    <div class="card flex-row">
                                                        <img class="img-fluid" alt="100%x280" src="<?= base_url('berkas/icon/') . $row->gambar ?>">
                                                        <div class="card-body">
                                                            <h4 class="card-title"><?= $row->nama_program ?></h4>
                                                            <p class="card-text"><?= $row->kegiatan ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                        </div>
                                    </div>

                                <?php $i++;
                                endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col end-->
            <div class="col-lg-3">
                <div class="right-sidebar-1">
                    <div class="widgets widgets-item widget-banner">
                        <a href="http://ung.ac.id" target="_blank">
                            <img class="img-fluid" src="<?= base_url('assets/vendor/'); ?>images/banner/bannerkanan.png" alt="">
                        </a>
                    </div>
                    <!-- widgets end-->

                </div>

            </div>
        </div>
    </div>
</section>

<section class="block-wrapper mb-45">
    <div class="container">
        <div class="ts-grid-box ts-grid-box-heighlight">
            <h2 class="ts-title">Galeri Kegiatan</h2>

            <div class="owl-carousel" id="more-news-slider">
                <?php foreach ($gk as $r) { ?>
                    <div class="ts-overlay-style">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#">
                                    <img height="250" src="<?= base_url('berkas/galery/') . $r->file; ?>" alt="">
                                </a>
                            </div>
                            <a class="post-cat ts-green-bg" href="#"><?= $r->nama_galkat; ?></a>
                            <div class="overlay-post-content">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#"><?= $r->ket; ?></a>
                                    </h3>
                                    <span class="post-date-info">
                                        <i class="fa fa-clock-o"></i>
                                        <?= $r->tgl_upload; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end item-->
                    </div> <?php } ?>

                <!-- ts-overlay-style end-->
            </div>
            <!-- most-populers end-->
        </div>
        <!-- ts-populer-post-box end-->
    </div>
    <!-- container end-->
</section>

<section class="block-wrapper mb-30 hot-topics-heighlight">
    <div class="container">

        <div class="ts-grid-box">
            <h2 class="ts-title">Data Publikasi</h2>

            <div class="owl-carousel" id="hot-topics-slider">
                <?php foreach ($pk as $r) { ?>
                    <div class="item ts-pink-light-heighlight heighlight">
                        <div class="ts-post-thumb">
                            <a href="<?= site_url('berkas/filepub/') . $r->file ?>" target=" _blank">
                                <img height="200" src="<?= base_url('berkas/icon/pdff.png'); ?>" alt="">
                            </a>
                            <a class="post-cat" href="#"><?= $r->nama_kat ?></a>
                        </div>

                        <div class="post-content">

                            <h3 class="post-title">
                                <a href="<?= site_url('berkas/filepub/') . $r->file ?>" target=" _blank"><?= $r->nama_pub ?></a>
                            </h3>
                            <span class="post-date-info">
                                <i class="fa fa-clock-o"></i>
                                <?= $r->tgl_upload ?>
                            </span>
                        </div>
                    </div>
                <?php } ?>


                <!-- ts-grid-box end-->
            </div>
            <!-- most-populers end-->
        </div>
        <!-- ts-populer-post-box end-->
    </div>
    <!-- container end-->
</section>