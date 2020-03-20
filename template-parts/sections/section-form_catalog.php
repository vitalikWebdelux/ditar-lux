<!-- Start Bg -->
<div class="ep-bg ep-bg--sertificats">

<section class="ep-form-catalog">
	<div class="container ep-bg ep-bg--form">
		<div class="d-flex">

				<div class="ep-form-catalog__left">
					<div class="ep-form-catalog__img-wrap ep-img-wrap">
						<img src="<?php echo SD_THEME_IMAGE_URI; ?>/bg-form-catalog.png" alt="">
					</div>
				</div>

				<div class="ep-form-catalog__right">
						<div class="ep-form-catalog__overlay">
							<h2 class="ep-form-catalog__title ep-title ep-title--lg">
								<span><?php _e('Отримайте </span><br>	
								повний прайс - каталог продукції', 'effectprof'); ?>
							</h2>
							<p class="ep-deskription ep-deskription--m ep-form-catalog__subtitle">
								<span><?php _e('+ забронюйте оптову ціну на весь асортимент продукції', 'effectprof'); ?></span>
							</p>
							
							<?php 
								$locale = get_locale();
								if($locale == 'uk'){
									echo do_shortcode('[contact-form-7 id="16" title="Каталог продукції"]');
								} elseif($locale == 'en_US') {
									//echo do_shortcode('[contact-form-7 id="16" title="Каталог продукції"]');
								}?>
						</div>
					</div>	
				</div>
		</div>
	</div>
</section>