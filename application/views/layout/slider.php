	<!-- block wrapper start-->
	<section class="block-wrapper mt-15">
		<div class="container">
			<div class="row post-style-3">
				<div class="col-lg-12 col-md-12">
					<div id="featured-slider" class="owl-carousel ts-overlay-style ts-featured">


						<?php foreach ($sli as $r) { ?>
							<div class="item" style="background-image:url(<?= base_url('berkas/slide/') . $r->file ?>)">

								<div class="overlay-post-content">
									<div class="post-content">
										<h2 class="post-title lg">
											<a href="#"></a>
										</h2>

									</div>
								</div>
								<!--/ Featured post end -->

							</div>


						<?php } ?>

						<!-- Item 1 end -->

						<!-- Item 3 end -->
					</div>
					<!-- Featured owl carousel end-->
				</div>

				<!-- col end-->

			</div>
			<!-- row end-->
		</div>
		<!-- container end-->
	</section>