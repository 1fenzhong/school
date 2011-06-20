<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.

//nav menu function
    if (function_exists('register_nav_menus')){
      register_nav_menus( array(
          'header-navi-menu' => __( '头部导航菜单' ),
          'header-user-menu' => __( '头部用户菜单' ),          
          'footer-menu' => __( '底部自定义菜单' ) 
                                )
                          );
    }

//menu item desc
class description_walker extends Walker_Nav_Menu
{
  function start_el(&$output, $item, $depth, $args)
  {
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
    $class_names = ' class="'. esc_attr( $class_names ) . '"';

    $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

    $prepend = '<strong>';
    $append = '</strong>';
    $description  = ! empty( $item->description ) ? '<p class="subtext">'.esc_attr( $item->description ).'</p>' : '';

    if($depth != 0)
      {
        $description = $append = $prepend = "";
      }

    $item_output = $args->before;
    $item_output .= '<p class="title"><a'. $attributes .'>';
    $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
    $item_output .= '</a></p>';
    $item_output .= $args->after;
    $item_output .= $description.$args->link_after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}

// log tag
register_taxonomy('log_tag', 'log', array(
  'label' => 'Log 标签',
  'singular_label' => 'Log 标签',
  'public' => true,
  'show_tagcloud' => false,
  'query_var' => true,
  'hierarchical' => false,
  'rewrite' => array(
    'slug' => 'log/tag',
    'with_front' => 'false'
  ),
));

// log post type
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'log',
    array(
      'labels' => array(
        'name' => __( 'Log' ),
        'singular_name' => __( 'Log' ),
        'add_new' => __('生产 Log'),
        'add_new_item' => __('生产 Log'),
        'rewrite' => array('slug' => '$slug'),
                        ),
      'menu_position' => 5,
      'publicly_queryable' => true,
      'capability_type' => 'post',
      'query_var' => true,
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'comments', 'revisions', 'post-formats'),
      'taxonomies' => array('log_tag')));
}

function always_show_adminbar( $wp_admin_bar) {
	if ( !is_user_logged_in() )
	$wp_admin_bar->add_menu( array( 'title' => __( 'Log In' ), 'href' => wp_login_url() ) );
}
add_action( 'admin_bar_menu', 'always_show_adminbar' );
add_filter( 'show_admin_bar', '__return_true' , 1000 );

?>