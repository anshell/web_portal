<!-- post wraper start-->
<section class="block-wrapper mb-30 hot-topics-heighlight">
    <div class="container">
        <div class="ts-grid-box">
            <h2 class="ts-title">Magang Mahasiswa</h2>
            <div class="post-content-area">
                <div class="entry-content">
                    <div class="container">
                        <p><?php
                            echo '<pre>';
                            var_dump($magang);
                            echo '</pre>';

                            ?></p>
                    </div>
                </div>
                <!-- entry content end-->
            </div>
            <!-- most-populers end-->
        </div>

        <!-- ts-populer-post-box end-->
    </div>
    <!-- container end-->
</section>
<!-- post wraper end-->
<section class="block-wrapper mb-30 hot-topics-heighlight">
    <div class="container">

        <div class="ts-grid-box">
            <h2 class="ts-title">Program Kampus Merdeka</h2>

            <div class="owl-carousel" id="hot-topics-slider">
                <?php $i = 0;

                foreach ($prog as $row) : ?>
                    <?php if ($i == 0) {
                        $set_ = 'active';
                    } else {
                        $set_ = '';
                    } ?>
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2286px;">

                            <div class="owl-item <?= $set_; ?>" style="width: 351px; margin-right: 30px;">
                                <div class="item <?= $row->class; ?> heighlight">
                                    <div class="ts-post-thumb">
                                        <a href="<?= site_url('program/') . $row->slug ?>">
                                            <img class="img-fluid" src="<?= base_url('berkas/icon/') . $row->gambar ?>" alt="">
                                        </a>
                                        <a class="post-cat" href="<?= site_url('program/') . $row->slug ?>"><?= $row->nama_program ?></a>
                                    </div>

                                    <div class="post-content">

                                        <h3 class="post-title">
                                            <a href="<?= site_url('program/') . $row->slug ?>"><?= $row->kegiatan ?></a>
                                        </h3>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                <?php $i++;
                endforeach ?>
                <div class="owl-nav disabled"><button role="presentation" class="owl-prev"><span aria-label="prev">‹</span></button><button role="presentation" class="owl-next"><span aria-label="next">›</span></button></div>
                <div class="owl-dots"><button class="owl-dot active"><span></span></button><button class="owl-dot"><span></span></button><button class="owl-dot"><span></span></button><button class="owl-dot"><span></span></button><button class="owl-dot"><span></span></button><button class="owl-dot"><span></span></button></div>
            </div>
            <!-- most-populers end-->
        </div>
        <!-- ts-populer-post-box end-->
    </div>
    <!-- container end-->
</section>