<?php
// Register menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'jointswp' ),   // Main nav in header
		'footer-links' => __( 'Footer Links', 'jointswp' ) // Secondary nav in footer
	)
);

// The Top Menu
function joints_top_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical medium-horizontal menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()
    ));
} /* End Top Menu */

// The Off Canvas Menu
function joints_off_canvas_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Off_Canvas_Menu_Walker()
    ));
} /* End Off Canvas Menu */

// The Footer Menu
function joints_footer_links() {
    wp_nav_menu(array(
    	'container' => 'false',                              // Remove nav container
    	'menu' => __( 'Footer Links', 'jointswp' ),   	// Nav name
    	'menu_class' => 'menu',      					// Adding custom nav class
    	'theme_location' => 'footer-links',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
    	'fallback_cb' => ''  							// Fallback function
	));
} /* End Footer Menu */

// Header Fallback Menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => '',      // Adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // Before each link
        'link_after' => ''                             // After each link
	) );
}

// Footer Fallback Menu
function joints_footer_links_fallback() {
	/* You can put a default here if you like */
}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
add_filter( 'wp_nav_menu_items', 'add_login_link', 10, 2);
/**
 * Add a login/logout link, edit profile and add new articles etc links for logged in users
 */
function add_login_link( $items, $args )
{
    if($args->theme_location == 'main-nav')
    {
        if (!is_user_logged_in())
        {
            $items .= '<li><a href="'. wp_login_url() .'">Log In</a></li>';
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_logout_link', 10, 2);
/**
 * Add a logout link, edit profile and add new articles etc links for logged in users
 */
function add_logout_link( $items, $args )
{
    if($args->theme_location == 'main-nav')
    {
        if ( is_user_logged_in())
        {
						$items .= '<li class="has-submenu is-dropdown-submenu-parent"><a href="#">Add Content</a><ul class="menu submenu is-dropdown-submenu first-sub vertical">';
            $items .= '<li><a href="' . admin_url() . 'post-new.php">Add Blog Post</a></li>';
            // $items .= '<li><a href="' . admin_url() . 'post-new.php?post_type=resource">Add Resource</a></li>';
            // $items .= '<li><a href="' . admin_url() . 'post-new.php?post_type=news">Add News Report</a></li>';
            $items .= '<li><a href="'. get_edit_user_link() .'">Edit Profile</a></li></ul></li>';
            $items .= '<li class="logout"><a href="'. wp_logout_url(home_url()) .'">Log Out</a></li>';
        }
    }
    return $items;
}

/**
 * WordPress function for redirecting users on login based on user role
 */
function my_login_redirect( $url, $request, $user ){
    if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
        if( $user->has_cap( 'administrator' ) ) {
            $url = admin_url();
        } else {
            $url = home_url();
        }
    }
    return $url;
}
add_filter('login_redirect', 'my_login_redirect', 10, 3 );
