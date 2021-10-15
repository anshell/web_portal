<!-- post wraper start-->
<section class="block-wrapper mb-30 hot-topics-heighlight">
    <div class="container">
        <div class="ts-grid-box">
            <h2 class="ts-title">Proyek Kemanusiaan</h2>
            <div class="post-content-area">
                <div class="entry-content">
                    <div class="container text-center">
                        <p>Proyek Kemanusiaan</p>
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
            <p>Lorem ipsum dolor sit am</p>
            <div class="most-populers owl-carousel">
                <?php $i = 0;

                foreach ($prog as $row) : ?>
                    <?php if ($i == 0) {
                        $set_ = 'active';
                    } else {
                        $set_ = '';
                    } ?>
                    <div class="item">
                        <a class="post-cat <?= $row->class; ?>" href="#"><?= $row->nama_program ?></a>
                        <div class="ts-post-thumb">
                            <a href="<?= site_url('program/') . $row->slug ?>">
                                <img class="img-fluid" src="<?= base_url('berkas/icon/') . $row->gambar ?>" alt="">
                            </a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#"><?= $row->kegiatan ?></a>
                            </h3>

                        </div>
                    </div>

                <?php $i++;
                endforeach ?>

            </div>
            <!-- most-populers end-->
        </div>

    </div>
    <!-- col end -->