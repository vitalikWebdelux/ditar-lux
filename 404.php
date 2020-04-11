<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ditarlux
 */

get_header(); ?>
	<section class="error-page">
		<h1 class="dl-title dl-title--l"><span>404. </span> Вибачте, такої сторінки не існує! </h1>
		<a class="dl-btn link-btn" href="<?php echo site_url();?>" class="dl-btn">На головну</a>
	</section>
<?php get_footer();
