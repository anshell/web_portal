<!-- post wraper start-->
<section class="block-wrapper mb-30 hot-topics-heighlight">
    <div class="container">



        <div class="ts-grid-box">

            <h2 class="ts-title">Pengelola Program</h2>

            <div class="post-content-area">
                <div class="entry-content">

                    <div class="container mt-2 d-flex">
                        <?php

                        foreach ($pengelola as $r) { ?>
                            <tr>
                                <div class="card p-2">
                                    <div class="d-flex align-items-center">
                                        <div class="image"> <img src="<?= base_url('berkas/pengurus/') . $r->foto; ?>" class="rounded" width="155"> </div>
                                        <div class="ml-3 w-100">
                                            <h4 class="mb-0 mt-0"><?= $r->nama; ?></h4> <span><?= $r->jabatan; ?></span>
                                        </div>
                                    </div>
                                </div>

                    </div>

                <?php } ?>





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