<?php
/**
 * Khl nav walker
 *
 * @package khl
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( !class_exists( 'Sd_Nav_Walker' ) ) {
	class Sd_Nav_Walker extends Walker_Nav_Menu {

		/**
		 * Starts the list before the elements are added.
		 *
		 * @since 3.0.0
		 *
		 * @see Walker::start_lvl()
		 *
		 * @param string   $output Used to append additional content (passed by reference).
		 * @param int      $depth  Depth of menu item. Used for padding.
		 * @param stdClass $args   An object of wp_nav_menu() arguments.
		 */
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat( "\t", $depth );
			if($depth == 0) {
				$output .= "\n$indent<ul role=\"menu\" class=\"khl-main-nav__dropdown\" >\n";
			}
			if($depth == 1) {
				$output .= "\n$indent<ul role=\"menu\" class=\"khl-main-nav__dropdown khl-main-nav__dropdown--third\" >\n";
			}

		}

		/**
		 * Starts the element output.
		 *
		 * @since 3.0.0
		 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
		 *
		 * @see Walker::start_el()
		 *
		 * @param string   $output Used to append additional content (passed by reference).
		 * @param WP_Post  $item   Menu item data object.
		 * @param int      $depth  Depth of menu item. Used for padding.
		 * @param stdClass $args   An object of wp_nav_menu() arguments.
		 * @param int      $id     Current item ID.
		 */
		public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

			$url = $item->url;
			$url_hash = strpos($url, '#');

			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
			$value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			if ( $args->has_children ) {
				$class_names .= ' main-menu__item main-menu__submenu';
			}

			if ( in_array( 'current-menu-item', $classes, true ) ) {
				$class_names .= ' main-menu__item--active';
			}

			if ( in_array( 'menu-item', $classes, true ) ) {
				$class_names .= ' main-menu__item';
			}

			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
			$output .= $indent . '<li itemscope="itemscope" ' . $id . $value . $class_names . '>';
			$atts = array();
			if ( empty( $item->attr_title ) ) {
			$atts['title']  = ! empty( $item->title ) ? strip_tags( $item->title ) : '';
			} else {
				$atts['title'] = $item->attr_title;
			}
			$atts['target'] = ! empty( $item->target )	? $item->target	: '';
			$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';
			// If item has_children add atts to a.
			if ( $args->has_children && 0 === $depth || $args->has_children && 1 === $depth  ) {
				$atts['class'] = 'main-menu__link main-menu__dropdown-link';
				$atts['role'] = 'button';
				$atts['href'] = !empty( $item->url ) ? $item->url : '';
			} else {
				$atts['class'] = 'main-menu__link';
				$atts['href'] = !empty( $item->url ) ? $item->url : '';
			}
			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}
			$item_output = $args->before;

			/*
			 * Menu icon
			 * 
			 */
			if ( ! empty( $item->attr_title ) ) {
				$item_output .= '<a'. $attributes .'>';
			} else {
				$item_output .= '<a'. $attributes .'>';
			}
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $args->has_children && 1 === $depth || $args->has_children && 0 === $depth) ? ' <i class="fa fa-angle-right"></i> </a>' : esc_attr( $item->attr_title ) . '&nbsp;</a>';
			$item_output .= $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

		}

		/**
		 * Traverse elements to create list from elements.
		 *
		 * Display one element if the element doesn't have any children otherwise,
		 * display the element and its children. Will only traverse up to the max
		 * depth and no ignore elements under that depth.
		 *
		 * This method shouldn't be called directly, use the walk() method instead.
		 *
		 * @see Walker::start_el()
		 * @since 2.5.0
		 *
		 * @access public
		 * @param mixed $element Data object.
		 * @param mixed $children_elements List of elements to continue traversing.
		 * @param mixed $max_depth Max depth to traverse.
		 * @param mixed $depth Depth of current element.
		 * @param mixed $args Arguments.
		 * @param mixed $output Passed by reference. Used to append additional content.
		 * @return null Null on failure with no changes to parameters.
		 */
		public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {

			if ( ! $element ) {
				return; }
			$id_field = $this->db_fields['id'];
			// Display this element.
			if ( is_object( $args[0] ) ) {
				$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] ); }
				parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
			}

		}
}
