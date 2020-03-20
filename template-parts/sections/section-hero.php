<?php 
// get_template_part( 'template-parts/components/component', 'slider' );
$hero_image = carbon_get_theme_option('hero-image', 'complex');
?> 

<section class="dl-service">
	<div class="container ">
		<div class="row">
			<div class="col-lg-12">	
				<h1 class="dl-title dl-title--lg dl-service__title text-center"><span>Оберіть послугу</span>, яка Вас цікавить</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="dl-service__overlay bg bg--s-1">
					<div class="dl-service__btn-wrap">
						<button class="dl-btn dl-btn--border-white dl-service__btn">
							Авто з США
						</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="dl-service__overlay bg bg--s-2">
					<div class="dl-service__btn-wrap">
						<button class="dl-btn dl-btn--border-white dl-service__btn">
							СТО
						</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="dl-service__overlay bg bg--s-3">
					<div class="dl-service__btn-wrap">
						<button class="dl-btn dl-btn--border-white dl-service__btn">
							Авторозбір
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>