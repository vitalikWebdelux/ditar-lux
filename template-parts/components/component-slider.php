<?php
function slider_generate($name, $array){
	if(is_array($array)){
		if(!empty($array)){
			foreach ($array as $item => $value) { 
				?>
					<div class="ep-slider ep-slider--<?php if(!empty($name)){ echo $name; } ?>">
						<?php if(!empty($item['img_array'])){ foreach ($item['img_array']) as $item_img => $value) {?>
							<div class="ep-slide">
								<div class="ep-img-wrap">
									<img src="<?php if(!empty($item_img['img'])){ echo $item_img['img']; }  ?>" alt="">
								</div>
							</div>
						<?php  }  } ?>
					</div>
				<?php
			}
		}
	}
}