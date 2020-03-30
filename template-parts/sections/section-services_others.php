<section class="dl-othrers-services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="dl-title dl-title--l dl-service__title text-center">
					Скористайтесь іншими нашими сервісами
				</h2>
			</div>
			<div class="col-lg-6">
				<div class="dl-service__overlay">
					<div class="dl-service__inner">
						<img src="<?php echo SD_THEME_IMAGE_URI; ?>/otherservicesto.jpg" alt="">
						<div class="dl-service__btn-wrap">
						<?php if(is_page('20')){ ?>
							<a href="https://<?php echo SD_THEME_SLUG; ?>/avtoservis" class="dl-btn dl-btn--border-white dl-service__btn">
								Автосервіс
							</a>
						<?php } elseif (is_page('22')) { ?>
							<a href="https://<?php echo SD_THEME_SLUG; ?>/auto-with-usa" class="dl-btn dl-btn--border-white dl-service__btn">
								Авто з США
							</a>
						<?php } ?>

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="dl-service__overlay mt-lg-30 mt-md-15">
					<div class="dl-service__inner">
						<img src="<?php echo SD_THEME_IMAGE_URI; ?>/otherautoservice.jpg" alt="">
						<div class="dl-service__btn-wrap">
							<a href="https://autogroup.org.ua" class="dl-btn dl-btn--border-white dl-service__btn">
								Авторозбір
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>