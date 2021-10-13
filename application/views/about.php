<!-- post wraper start-->
<section class="block-wrapper mb-30 hot-topics-heighlight">
    <div class="container">



        <div class="ts-grid-box">

            <h2 class="ts-title">Profil</h2>

            <div class="post-content-area">
                <div class="entry-content">
                    <?php foreach ($profil as $r) { ?>
                        <p class="lead">
                            <?= $r->profil ?>
                        </p>


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