<section class="dl-othrers-services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="dl-title dl-title--l dl-service__title text-center">
					Скористайтесь іншими нашими сервісами
				</h2>
			</div>
			<div class="col-md-6">
				<div class="dl-service__overlay">
					<?php if(is_page('20')){ ?>
					<a href="http://bric.org.ua/<?php echo SD_THEME_SLUG; ?>/avtoservis" class="dl-service__inner d-block">
						<span class="dl-service__gradient d-block"></span>
						<img src="<?php echo SD_THEME_IMAGE_URI; ?>/otherservicesto.jpg" alt="Автосервіс">
						<span class="dl-service__btn-wrap">
							<span class="dl-btn dl-btn--border-white dl-service__btn">
								Автосервіс
							</span>
						</span>
					</a>
					<?php } elseif (is_page('22')) { ?>
					<a href="http://bric.org.ua/<?php echo SD_THEME_SLUG; ?>/auto-with-usa" class="dl-service__inner d-block">
						<span class="dl-service__gradient d-block"></span>
						<img src="<?php echo SD_THEME_IMAGE_URI; ?>/auto.png" alt="Авто з США">
						<span class="dl-service__btn-wrap">
							<span  class="dl-btn dl-btn--border-white dl-service__btn">
								Авто з США
							</span>
						</span>
						
					</a>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="dl-service__overlay mt-md-15">
					<a href="https://autogroup.org.ua"  class="dl-service__inner d-block">
						<span class="dl-service__gradient d-block"></span>
						<img src="<?php echo SD_THEME_IMAGE_URI; ?>/otherautoservice.jpg" alt="Авторозбір">
						<span class="dl-service__btn-wrap">
							<span class="dl-btn dl-btn--border-white dl-service__btn">
								Авторозбір
							</span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>