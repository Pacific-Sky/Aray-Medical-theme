<?php
class Aray_Walker_Nav_Menu extends MOZ_Walker_Nav_Menu {
	/**
	 * Start the element output.
	 *
	 * @see   Walker_Nav_Menu::start_el()
	 *
	 * @since 1.0
	 *
	 * @param string        $output Passed by reference. Used to append additional content.
	 * @param object        $item   Menu item data object.
	 * @param int           $depth  Depth of menu item. Used for padding.
	 * @param object|array  $args   An array of arguments. @see wp_nav_menu()
	 * @param int           $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		/// Menu Item Opening

		$item_classes = array( '__item' );

		// add classes to current/parent/ancestor items
		if ( isset( $item->current ) && $item->current ) {
			$item_classes[] = '__item--current';
		}
		if ( isset( $item->current_item_ancestor ) && $item->current_item_ancestor ) {
			$item_classes[] = '__item--ancestor';
		}
		if ( isset( $item->current_item_parent ) && $item->current_item_parent ) {
			$item_classes[] = '__item--parent';
		}
		if ( isset( $item->has_children ) && $item->has_children ) {
			$item_classes[] = '__item--has-children';
		}

		// BEM-ify the given sub classes
		$item_classes_str = MOZ_BEM::get_bem( $args->menu_class, $item_classes );

		if ( isset( $item->classes[0] ) && ! empty( $item->classes[0] ) ) {
			// the first item in the 'classes' array is the user-set class
			// the rest of the classes are superfluous
			$item_classes_str .= " {$item->classes[0]}";
		}

		$output .= "<li class=\"$item_classes_str\">";

		/// Menu Link

		$attrs = array_filter( array(
			'title'  => $item->attr_title,
			'target' => $item->target,
			'rel'    => $item->xfn,
			'href'   => ( ! empty( $item->url ) && '#' !== $item->url ) ? $item->url : '',
			'class'  => "{$args->menu_class}__link"
		), function ( $attr ) {
			// filter out the empty
			// attributes
			return ! empty( $attr );
		});

		$tag = isset( $attrs['href'] ) ? 'a' : 'span';

		$filtered_title = apply_filters( 'the_title', $item->title, $item->ID );

		if($depth > 0) {
			$link_content = $args->link_before
			                . "<figure>"
			                . apply_filters( 'menu_item_thumbnail' , ( isset( $args->thumbnail ) && $args->thumbnail ) ? get_the_post_thumbnail( $item->object_id , ( isset( $args->thumbnail_size ) ) ? $args->thumbnail_size : 'thumbnail' , $attrs ) : '' , $item , $args , $depth )
			                . "	<figcaption>{$filtered_title}</figcaption>"
			                . "</figure>"
			                . $args->link_after;

		} else {
			$link_content = $args->link_before
			                . $filtered_title
			                . $args->link_after;
		}

		$output .= $args->before;
		$output .= MOZ_Html::get_element( $tag, $attrs, $link_content );
		$output .= $args->after;
	}
}

add_filter( 'wp_nav_menu_args' , 'my_add_menu_descriptions' );
function my_add_menu_descriptions( $args ) {
    $args['walker'] = new Aray_Walker_Nav_Menu;
    $args['desc_depth'] = 1;
    $args['thumbnail'] = true;
    $args['thumbnail_link'] = false;
    $args['thumbnail_size'] = 'full';
    $args['thumbnail_attr'] = array( 'class' => 'nav_thumb my_thumb' , 'alt' => 'test' , 'title' => 'test' );

    return $args;
}

class Aray_Menu extends MOZ_Menu {
	/**
	 * Print a wp nav menu for
	 * the given theme location
	 * using some sensible defaults
	 *
	 * @param string $theme_location
	 * @param array  $extras
	 */
	public static function nav_menu( $theme_location = 'primary', $extras = array() ) {
		echo self::get_nav_menu( $theme_location, $extras );
	}

	/**
	 * Return a wp nav menu for
	 * the given theme location
	 * using some sensible defaults
	 *
	 * @param string $theme_location
	 * @param array  $extras
	 *
	 * @returns string
	 */
	public static function get_nav_menu( $theme_location = 'primary', $extras = array() ) {
		$menu_class = isset( $extras['menu_class'] ) && ! empty( $extras['menu_class'] )
			? $extras['menu_class']
			: 'menu';

		$container_class = 'menu' === $menu_class
			? "$menu_class $menu_class--$theme_location"
			: $menu_class;

		$show_level_class = isset( $extras['show_level_class'] )
			? (bool) $extras['show_level_class']
			: true;

		$wrap_class = "{$menu_class}__list";
		if ( $show_level_class ) {
			$wrap_class .= " {$menu_class}__list--level-0";
		}

		return wp_nav_menu( array_merge( array(
			'echo'             => false,
			'theme_location'   => $theme_location,
			'container'        => 'nav',
			'container_class'  => $container_class,
			'menu_class'       => $menu_class,
			'show_level_class' => $show_level_class,
			'items_wrap'       => "<ul class=\"{$wrap_class}\">%3\$s</ul>",
			'fallback_cb'      => false,
			'walker'           => new Aray_Walker_Nav_Menu
		), $extras ) );
	}

}
