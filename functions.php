<?php

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path( $path ) {

    // update path
    $path = get_template_directory() . '/vendor/acf/';

    // return
    return $path;

}


// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {

    // update path
    $dir = get_template_directory_uri() . '/vendor/acf/';

    // return
    return $dir;

}


// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_template_directory() . '/vendor/acf/acf.php' );

// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');
require_once(get_template_directory().'/assets/functions/menu-walkers.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php');

// Customize the WordPress customizer
require_once(get_template_directory().'/assets/functions/customize.php');

/* ADD RESOURCE AND NEWS POST TYPES TO THE MAIN QUERY ON AUTHOR AND CATEGORY PAGES */

add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( is_author() && $query->is_main_query() || is_category() && $query->is_main_query()  )
		$query->set( 'post_type', array( 'post', 'resource', 'news' ) );

	return $query;
}


/* Admin init */
add_action( 'admin_init', 'my_settings_init' );

/* Settings Init */
function my_settings_init(){

    /* Create settings section */
    add_settings_section(
        'contact-section-id',                   // Section ID
        'Site Contact Details',  // Section title
        'contact_settings_section_description', // Section callback function
        'general'                          // Settings page slug
    );

    /* Create settings field */
}

/* Setting Section Description */
function contact_settings_section_description(){
    echo wpautop( "Please add Twitter and Email contact details here. These will display on the front-end contact sections of the website" );
}

add_filter('admin_init', 'my_general_settings_register_fields');

function my_general_settings_register_fields()
{
    register_setting('general', 'twitter_field', 'esc_attr');
    add_settings_field('twitter_field', '<label for="twitter_field">'.__('Twitter' , 'twitter_field' ).'</label>' , 'my_general_settings_fields_html', 'general', 'contact-section-id');
}

function my_general_settings_fields_html()
{
    $value = get_option( 'twitter_field', '' );
    echo '<input type="text" id="twitter_field" name="twitter_field" value="' . $value . '" />';
}

add_filter('admin_init', 'my_email_settings_register_fields');

function my_email_settings_register_fields()
{
    register_setting('general', 'email_field', 'esc_attr');
    add_settings_field('email_field', '<label for="email_field">'.__('Email' , 'email_field' ).'</label>' , 'my_email_settings_fields_html', 'general', 'contact-section-id');
}

function my_email_settings_fields_html()
{
    $value = get_option( 'email_field', '' );
    echo '<input type="text" id="email_field" name="email_field" value="' . $value . '" />';
}

add_filter('admin_init', 'my_upload_settings_register_fields');

function my_upload_settings_register_fields()
{
    register_setting('general', 'upload_field', 'esc_attr');
    add_settings_field('upload_field', '<label for="upload_field">'.__('Email' , 'upload_field' ).'</label>' , 'my_upload_settings_fields_html', 'general', 'contact-section-id');
}

function my_upload_settings_fields_html()
{
    $value = get_option( 'upload_field', '' );
    echo '<input type="file" id="upload_field" name="upload_field" value="' . $value . '" />';
}
