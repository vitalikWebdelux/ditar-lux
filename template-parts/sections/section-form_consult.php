<section class="ep-form-consult">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-lg-6">
				<div class="ep-form-consult__img-wrap ep-img-wrap">
					<img src="<?php echo SD_THEME_IMAGE_URI; ?>/bg-form-consult.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-6 ep-bg ep-bg--form">
				<div class="ep-form-consult__overlay">
					<div class="ep-form-consult__inner">
						<h2 class="ep-form-consult__title ep-title ep-title--lg">
							<span>Безкоштовна</span><br>
							професійна консультація від менеджера
						</h2>
						<div class="ep-form-consult__list">
							
							<p class="ep-form-consult__item ep-text ">
								<span class="ep-ico ep-ico-consult-check"></span>
								<span>Консультацію по вибору</span><br> необхідної продукції
							</p>
							<p class="ep-form-consult__item ep-text ">
								<span class="ep-ico ep-ico-consult-check"></span>
								Приблизну <span>вартість та <br> термін</span> доставки
							</p>
						</div>
						<?php 
							$locale = get_locale();
							if($locale == 'uk'){
								echo do_shortcode('[contact-form-7 id="17" title="Консультація у менеджера]');
							} elseif($locale == 'en_US') {
								//echo do_shortcode('[contact-form-7 id="16" title="Каталог продукції"]');
						}?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
</section>

