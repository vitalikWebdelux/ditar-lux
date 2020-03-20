<?php 
// get_template_part( 'template-parts/components/component', 'slider' );
$hero_image = carbon_get_theme_option('hero-image', 'complex');
?> 

<section class="ep-hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="ep-hero__overlay">
					<div class="ep-hero__inner">		
						<h1 class="ep-hero__title ep-title ep-title--big">Системи <br> алюмінієвих профілів <br><span>та фурнітура</span></h1>
						<p class="ep-hero__deskription ep-deskription ep-deskription--l">
							Проектуємо та виготовляємо системи алюмінієвих 
							профілів та продаємо фурнітуру для скляних конструкцій 
							від виробника
						</p>
						<div class="ep-hero__deskription ep-deskription ep-deskription--m">
							<span>Комплексні рішення - системний підхід</span>
						</div>	
						<div class="ep-hero__btn-wrap">
							<button class="ep-btn ep-hero__btn">
								Отримати пропозицію
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="ep-hero__slider-wrap">
					<?php 
						if(!empty($hero_image)){
								// slider_generate('hero', $hero_image);
						} ?>
					<div class="ep-hero__slider ep-slider">
						<div class="ep-hero__slide">
							<img src="<?php echo SD_THEME_IMAGE_URI; ?>/slide1.jpg" alt="">
						</div>
						<div class="ep-hero__slide">
							<img src="<?php echo SD_THEME_IMAGE_URI; ?>/slide2.jpg" alt="">
						</div>
						<div class="ep-hero__slide">
							<img src="<?php echo SD_THEME_IMAGE_URI; ?>/slide1.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>