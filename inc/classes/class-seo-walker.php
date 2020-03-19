<?php
class SeoWalker  extends Walker_Nav_Menu {
	public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		$html = "";
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    $classes[] = 'menu-item-' . $item->ID;
	    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		if($depth == 0) {
			$html .= "\n<li";
			

			if(!$args->walker->has_children) {
				$html .= ' class="nav-item ' .$class_names.'"';
			}

			if($args->walker->has_children) {
				$html .= ' class="dropdown nav-item ' .$class_names.'"';
			}
			
			if($item->url=='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']){
                $html .= ">\n<span ";
      
		        if($args->walker->has_children) {
		          $html .= 'class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
		        }

		        if(!$args->walker->has_children) {
		          $html .= 'class="nav-link "';
		        }
		                $html .= ' >%2\%s';
		                $html .= '</span>';
		            }else {
		              $html .= ">\n<a ";
		      
		        if($args->walker->has_children) {
		          $html .= 'class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
		        }

		        if(!$args->walker->has_children) {
		          $html .= 'class="nav-link "';
		        }
		                $html .= ' href="%s">%s';
		                $html .= '</a>';
		            }
			$output .= sprintf($html,$item->url,$item->title);
			
		}
		else if($depth == 1) {
			$html .= "\n<li";

			if(!$args->walker->has_children) {
				$html .= ' class="nav-item ' .$class_names.'"';
			}

			if($args->walker->has_children) {
				$html .= ' class="dropdown nav-item ' .$class_names.'"';
			}


			
			/*$html .= ">\n<a ";
			
			if($args->walker->has_children) {
				$html .= 'class="dropdown-item dropdown-toggle" ';
			}

			if(!$args->walker->has_children) {
				$html .= 'class="dropdown-item"';
			}

			if($item->url=='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']){
                $html .= 'href="#" data-seolink>' .$item->title;
            }else {
                $html .= ' href="%s">%s';
            }
			
			
			$html .= '</a>';

			*/
			if($item->url=='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']){
                $html .= ">\n<span ";
      
	        if($args->walker->has_children) {
	          $html .= 'class="dropdown-item dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
	        }

	        if(!$args->walker->has_children) {
	          $html .= 'class="dropdown-item "';
	        }
	                $html .= ' >%2\%s';
	                $html .= '</span>';
	            }else {
	              $html .= ">\n<a ";
	      
	        if($args->walker->has_children) {
	          $html .= 'class="dropdown-item dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
	        }

	        if(!$args->walker->has_children) {
	          $html .= 'class="dropdown-item "';
	        }
	                $html .= ' href="%s">%s';
	                $html .= '</a>';
            }
			$output .= sprintf($html,$item->url,$item->title);
		}

		else if($depth == 2) {
			$html .= "\n<li";

			if(!$args->walker->has_children) {
				$html .= ' class="nav-item ' .$class_names.'"';
			}

			if($args->walker->has_children) {
				$html .= ' class="dropdown nav-item ' .$class_names.'"';
			}

			
			if($item->url=='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']){
                $html .= ">\n<span ";
      
	        if($args->walker->has_children) {
	          $html .= 'class="dropdown-item dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
	        }

	        if(!$args->walker->has_children) {
	          $html .= 'class="dropdown-item "';
	        }
	                $html .= ' >%2\%s';
	                $html .= '</span>';
	            }else {
	              $html .= ">\n<a ";
	      
	        if($args->walker->has_children) {
	          $html .= 'class="dropdown-item dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
	        }

	        if(!$args->walker->has_children) {
	          $html .= 'class="dropdown-item "';
	        }
	                $html .= ' href="%s">%s';
	                $html .= '</a>';
            }
			$output .= sprintf($html,$item->url,$item->title);
		}

		
	}
	
	public function end_el(&$output, $item, $depth = 0, $args = array()) {
		
		if($depth == 0) {
			$output .= "\n</li>";
		}
		if($depth == 1) {
			$output .= "\n</li>";
		}
		if($depth == 2) {
			$output .= "\n</li>";
		}
	}
	
	public function start_lvl(&$output, $depth = 0, $args = array()) {
		if($depth == 0) {
			$output .= ' <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
		}
		if($depth == 1) {
			$output .= ' <ul class="dropdown-menu">';
		}
	}
	
	public function end_lvl(&$output, $depth = 0, $args = array()) {
		if($depth == 0) {
			$output .= ' </ul>';
		}
		if($depth == 1) {
			$output .= ' </ul>';
		}
	}
	
}
?>