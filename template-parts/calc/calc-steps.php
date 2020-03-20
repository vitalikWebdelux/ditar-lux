<section class="ep-calc">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="ep-calc__header">
					<h2 class="ep-title ep-title--xl"></h2>
					<div class="ep-calc__header-inner">
						<p class="ep-text ep-text--header-text"></p>
					</div>
				</div>
				<div class="ep-calc__slider">
					<?php 
						get_template_part( 'template-parts/calc', 'step_1' );
						get_template_part( 'template-parts/calc', 'step_2' );
						get_template_part( 'template-parts/calc', 'step_3' );
						get_template_part( 'template-parts/calc', 'step_4' );
						get_template_part( 'template-parts/calc', 'step_5' ); 
					?>
				</div>
				<div class="ep-calc__footer">

					<div class="ep-calc__btn-wrap">
						<div class="ep-calc__arrow"></div>
						<button class="btn ep-calc__btn"></button>
					</div>

					<div class="ep-calc__list">
						<div class="ep-calc__item">
							<p></p>
						</div>
						<div class="ep-calc__item">
							<p></p>
						</div>	
						<div class="ep-calc__item">
							<p></p>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</section>
<!-- bg-main end -->
</div>
<!-- | -->