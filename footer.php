<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ditarlux
 */
?>
</main>
<?php 	get_template_part( 'template-parts/modals/modal', 'thank' ); ?>
<?php 	get_template_part( 'template-parts/modals/modal', 'order_call' ); ?>
<?php 	get_template_part( 'template-parts/modals/modal', 'get_offer' ); ?>
<?php wp_footer(); ?>

</body>
</html>
