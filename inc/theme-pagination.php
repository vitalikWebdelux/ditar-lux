<?php
/**
 * Pagination layout.
 *
 * @package ditarlux
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'dl_pagination' ) ) {
	function dl_pagination( $args = array(), $class = 'lt-pagination' ) {

		if ( $GLOBALS['wp_query']->max_num_pages <= 1 ) {
			return;
		}
		$args = wp_parse_args(
			$args,
			array(
				'mid_size'           => 2,
				'prev_next'          => true,
				'prev_text'          => __( '&laquo;', 'ditarlux' ),
				'next_text'          => __( '&raquo;', 'ditarlux' ),
				'screen_reader_text' => __( 'Posts navigation', 'ditarlux' ),
				'type'               => 'array',
				'current'            => max( 1, get_query_var( 'paged' ) ),
			)
		);
		
		$links = paginate_links( $args );
		?>
		<nav class="<?php echo esc_attr($class); ?>" aria-label="<?php echo $args['screen_reader_text']; ?>">
			<ul class="lt-pagination__list">
				<?php
				foreach ( $links as $key => $link ) {
					?>
					<li class="lt-pagination__item <?php echo strpos( $link, 'current' ) ? 'lt-pagination__item--active' : ''; ?>">
						<?php echo str_replace( 'page-numbers', 'lt-pagination__link', $link ); ?>
					</li>
					<?php
				}
				?>
			</ul>
		</nav>
		<?php
	}
}
?>
