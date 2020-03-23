<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ditarlux
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<main class="dl-main">
<?php if(is_page('15')) : ?>
	<div class="dl-service-wrap bg bg--service">
<?php endif; ?>

<header class="dl-header">
	<div class="dl-header__overlay">
		<div class="container">
			<div class="dl-header__inner">
				<div class="dl-header__logo-wrap">
					<div class="dl-header__logo-inner">
						<?php  ?>
						<a href="<?php echo home_url(); ?>">
							<svg version="1.1" id="&#x421;&#x43B;&#x43E;&#x439;_4"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 226.772 226.772"
								 style="enable-background:new 0 0 226.772 226.772;" xml:space="preserve">
										<g>
											<path style="fill:#202020;stroke:#202020;stroke-width:0.5;stroke-miterlimit:10;" d="M145.416,207.921h-0.61v-4.968h-5.2v-0.523
												h5.2v-1.539c0-1.715-1.162-2.761-2.891-2.761s-2.891,1.046-2.891,2.761v7.03h-0.61v-6.842c0-2.208,1.38-3.501,3.501-3.501
												s3.501,1.293,3.501,3.501V207.921z"/>
											<path style="fill:#202020;stroke:#202020;stroke-width:0.5;stroke-miterlimit:10;" d="M154.444,197.752v7.031
												c0,1.714,1.162,2.76,2.891,2.76s2.891-1.046,2.891-2.76v-7.031h0.61v6.843c0,2.208-1.38,3.501-3.501,3.501
												s-3.501-1.293-3.501-3.501v-6.843H154.444z"/>
											<path style="fill:#202020;stroke:#202020;stroke-width:0.5;stroke-miterlimit:10;" d="M171.854,207.921h-0.61v-9.646h-2.891v-0.523
												h6.392v0.523h-2.891V207.921z"/>
											<path style="fill:#202020;stroke:#202020;stroke-width:0.5;stroke-miterlimit:10;" d="M180.691,202.837
												c0-2.876,2.266-5.259,5.156-5.259c2.892,0,5.187,2.383,5.187,5.259s-2.295,5.259-5.187,5.259
												C182.957,208.096,180.691,205.713,180.691,202.837z M190.395,202.837c0-2.542-1.976-4.707-4.547-4.707
												c-2.585,0-4.518,2.165-4.518,4.707s1.933,4.706,4.518,4.706C188.419,207.543,190.395,205.379,190.395,202.837z"/>
										</g>
										<path style="fill:#202020;" d="M169.08,157.94c-4.26,1.13-11.9,2.08-20.35,2.84l-95.51,2.36c1.64-5.2,4.92-12.82,11.56-19.73
											c9.43-9.82,23.05-15.52,39.91-16.35c13.28-0.66,26.65-0.87,39.8-2.64c14.99-2.03,24.52-14.65,24.02-29.66
											c-0.48-14.74-11.26-26.15-26.27-27.88c-2.61-0.3-5.21-0.68-8.26-1.1V30.91c42.04-3.86,76.92,12.95,78.35,62.25
											C213.29,126.2,197.31,150.44,169.08,157.94z"/>
										<path style="fill:#C10509;" d="M49.123,65.509c-12.36,0-23.37,0-34.718,0c0-11.993,0-23.424,0-35.298c37.115,0,74.065,0,111.525,0
											c0,11.614,0,23.193,0,35.368c-11.389,0-22.403,0-34.21,0c0,18.67,0,36.768,0,55.207c-18.121,4.151-32.737,12.464-42.597,28.725
											C49.123,121.847,49.123,94.181,49.123,65.509z"/>
										<g>
											<path style="fill:#202020;" d="M37.413,177.926v14.09h-6.985v-19.767h9.101c3.991,0,7.117,0.763,9.376,2.288
												c2.684,1.824,4.026,4.301,4.026,7.429c0,2.993-1.147,5.436-3.441,7.327c-2.294,1.893-5.248,2.839-8.86,2.839
												c-0.424,0-1.118-0.02-2.082-0.059v-5.807h1.118c4.071,0,6.107-1.434,6.107-4.301c0-2.693-2.001-4.04-6.004-4.04H37.413z"/>
											<path style="fill:#202020;" d="M63.942,172.249v19.767h-6.985v-19.767H63.942z"/>
											<path style="fill:#202020;" d="M79.598,177.926v14.09h-6.985v-14.09h-5.351v-5.677h17.669v5.677H79.598z"/>
											<path style="fill:#202020;" d="M96.768,182.097v5.213h-2.013v4.706h-6.985v-12.569c0-2.433,0.788-4.322,2.365-5.669
												s3.793-2.021,6.649-2.021c2.753,0,4.789,0.61,6.107,1.832s1.979,3.106,1.979,5.654v12.772h-6.985v-12.381
												c0-0.772-0.109-1.309-0.327-1.607c-0.218-0.3-0.608-0.449-1.17-0.449c-1.09,0-1.634,0.686-1.634,2.057v2.462H96.768z"/>
											<path style="fill:#202020;" d="M116.829,177.564v14.452h-6.984v-19.767h8.963c2.729,0,4.846,0.57,6.349,1.709
												c1.675,1.274,2.512,2.892,2.512,4.851c0,1.999-1.038,3.684-3.114,5.055l4.026,8.152h-7.329l-3.39-6.372v-5.082h0.551
												c1.468,0,2.202-0.531,2.202-1.593c0-0.937-0.849-1.405-2.546-1.405H116.829z"/>
											<path style="fill:#202020;" d="M137.485,172.249h6.985v11.744c0,0.917,0.175,1.527,0.524,1.832c0.35,0.304,1.041,0.456,2.073,0.456
												h0.361v5.734h-1.858c-2.546,0-4.53-0.625-5.952-1.875c-1.423-1.25-2.134-2.985-2.134-5.206V172.249z"/>
											<path style="fill:#202020;" d="M166.707,172.249v12.815c0,2.26-0.8,4.064-2.399,5.416c-1.601,1.352-3.73,2.027-6.392,2.027
												c-2.649,0-4.677-0.656-6.082-1.969c-1.404-1.313-2.107-3.201-2.107-5.662v-12.628h6.985v12.613c0,1.207,0.51,1.81,1.531,1.81
												c0.986,0,1.479-0.603,1.479-1.81v-12.613H166.707z"/>
											<path style="fill:#202020;" d="M188.01,172.249l-6.107,9.615l6.313,10.151h-7.346l-2.891-4.793l-2.443,4.793h-7.226l6.451-9.992
												l-6.107-9.774h7.277l2.736,4.489l2.202-4.489H188.01z"/>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
							</svg>
						</a>
					</div>
					<p class="dl-textline dl-textline--s dl-header__logo-description text-left">
						Комплекс послуг авто в<br>Івано-Франківську
					</p>
				</div>

				<div class="dl-header__btn-wrap">
					<p class="dl-textline dl-textline--s">Безкоштовна консультація</p>
					<button class="dl-btn dl-btn--border-white">
						<span class="dl-ico dl-ico--phone dl-header__ico dl-header__ico--phone"></span>
						Подзвоніть мені
					</button>
				</div>
				
				<div class="dl-header__soc-wrap">
					<p class="dl-textline dl-textline--s">Пишіть</p>
					<div class="dl-header__icons-wrap">
						<a href="#" class="dl-ico dl-ico--tg dl-header__ico dl-header__ico--tg"></a>
						<a href="#" class="dl-ico dl-ico--vb dl-header__ico dl-header__ico--vb"></a>
					</div>
				</div>

				<div class="dl-header__phone-wrap">
					<p class="dl-textline dl-textline--s">Телефонуйте</p>
					<div class="dl-header__phones-wrap ">
						<?php //if(!empty($phone_1)) : ?>
							<a href="tel:380667377273<?php// echo preg_replace('/\s+/', '', esc_html($phone)); ?>" class="dl-ico dl-ico--smartfon dl-header__ico dl-header__ico--smartfon"></a>
							<a class="dl-textline dl-textline--s dl-header__phone" href="tel:380667377273<?php// echo preg_replace('/\s+/', '', esc_html($phone)); ?>">
								<?php //echo esc_html($phone_1); ?>+38 (066) 737-72-73
							</a>
						<?php //endif; ?>
						<?php //if(!empty($phone_2)) : ?>
							<a class="dl-textline dl-textline--s dl-header__phone" href="tel:380980350345<?php //echo preg_replace('/\s+/', '', esc_html($phone)); ?>">
								<?php //echo esc_html($phone_2); ?>+38 (098) 035-03-45
							</a>
						<?php // endif; ?>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="dl-header__bottom">
		<div class="container">
			<?php if(!is_page('15')) {
				if( has_nav_menu( 'main_menu' ) ) {
					wp_nav_menu(array(
						'menu' => 'main_menu',
						'menu_class' => 'main-menu',
						'theme_location' => 'main_menu',
						'container' => 'ul',
					));
				}										
			} ?>
		</div>
	</div>
</header>


