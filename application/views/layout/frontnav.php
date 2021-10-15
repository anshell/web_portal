	<!-- top bar start -->
	<section class="top-bar v5">
		<div class="container">
			<div class="row">
				<div class="col-md-8 align-self-center">
					<div class="ts-breaking-news clearfix">
						<h2 class="breaking-title float-left">
							<i class="fa fa-bolt"></i> Informasi :
						</h2>
						<div class="breaking-news-content float-left" id="breaking_slider1">

							<?= showinformasi(); ?>

						</div>
					</div>
				</div>
				<!-- end col-->

				<div class="col-md-4 text-right xs-left">
					<div class="ts-date-item">
						<i class="fa fa-clock-o"></i>
						<?= date("j F Y") ?>
					</div>
				</div>
				<!--end col -->


			</div>
			<!-- end row -->
		</div>
	</section>
	<!-- end top bar-->


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

								<img src="<?= base_url('berkas/icon/') . logo(); ?>" width="310" height="70" alt="">
							</a>
							<div class="nav-toggle"></div>
						</div>
						<!--nav brand end-->

						<div class="nav-menus-wrapper clearfix">
							<!--nav right menu start-->
							<ul class="right-menu align-to-right">
								<li>
									<a href="<?= site_url('auth'); ?>">
										<i class="fa fa-user-circle-o"></i>
									</a>
								</li>
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
	<!-- header nav end-->