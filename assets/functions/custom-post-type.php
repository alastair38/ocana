<?php
/* joints Custom Resource Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function custom_post_example() {
	// creating (registering) the custom type
	register_post_type( 'resource', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Resources', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Resource', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Resources', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Resource', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Resources', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Resource', 'jointswp'), /* New Display Title */
			'view_item' => __('View Resource', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Resource', 'jointswp'), /* Search Resource Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the resource custom post type', 'jointswp' ), /* Resource Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-clipboard', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'resource', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'resource', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */

	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'resource');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'custom_type');

}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

	// now let's add resource categories (these act like categories)
    register_taxonomy( 'resource_cat',
    	array('resource'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */
    		'labels' => array(
    			'name' => __( 'Resource Types', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Resource Type', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Resource Types', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Resource Types', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Resource Type', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Resource Type:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Resource Type', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Resource Type', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Resource Type', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Resource Type Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'resource-category' ),
    	)
    );

	// now let's add custom tags (these act like categories)
    // register_taxonomy( 'custom_tag',
    // 	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    // 	array('hierarchical' => false,    /* if this is false, it acts like tags */
    // 		'labels' => array(
    // 			'name' => __( 'Custom Tags', 'jointswp' ), /* name of the custom taxonomy */
    // 			'singular_name' => __( 'Custom Tag', 'jointswp' ), /* single taxonomy name */
    // 			'search_items' =>  __( 'Search Custom Tags', 'jointswp' ), /* search title for taxomony */
    // 			'all_items' => __( 'All Custom Tags', 'jointswp' ), /* all title for taxonomies */
    // 			'parent_item' => __( 'Parent Custom Tag', 'jointswp' ), /* parent title for taxonomy */
    // 			'parent_item_colon' => __( 'Parent Custom Tag:', 'jointswp' ), /* parent taxonomy title */
    // 			'edit_item' => __( 'Edit Custom Tag', 'jointswp' ), /* edit custom taxonomy title */
    // 			'update_item' => __( 'Update Custom Tag', 'jointswp' ), /* update title for taxonomy */
    // 			'add_new_item' => __( 'Add New Custom Tag', 'jointswp' ), /* add new title for taxonomy */
    // 			'new_item_name' => __( 'New Custom Tag Name', 'jointswp' ) /* name title for taxonomy */
    // 		),
    // 		'show_admin_column' => true,
    // 		'show_ui' => true,
    // 		'query_var' => true,
    // 	)
    // );

    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */

		function news_post_type() {
			// creating (registering) the custom type
			register_post_type( 'news', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
			 	// let's now add all the options for this post type
				array('labels' => array(
					'name' => __('News', 'jointswp'), /* This is the Title of the Group */
					'singular_name' => __('News', 'jointswp'), /* This is the individual type */
					'all_items' => __('All News', 'jointswp'), /* the all items menu item */
					'add_new' => __('Add News', 'jointswp'), /* The add new menu item */
					'add_new_item' => __('Add News', 'jointswp'), /* Add New Display Title */
					'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
					'edit_item' => __('Edit News', 'jointswp'), /* Edit Display Title */
					'new_item' => __('Add News', 'jointswp'), /* New Display Title */
					'view_item' => __('View News', 'jointswp'), /* View Display Title */
					'search_items' => __('Search News', 'jointswp'), /* Search New Title */
					'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
					'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
					'parent_item_colon' => ''
					), /* end of arrays */
					'description' => __( 'This is the news custom post type', 'jointswp' ), /* New Description */
					'public' => true,
					'publicly_queryable' => true,
					'exclude_from_search' => false,
					'show_ui' => true,
					'query_var' => true,
					'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
					'menu_icon' => 'dashicons-media-document', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
					'rewrite'	=> array( 'slug' => 'news', 'with_front' => false ), /* you can specify its url slug */
					'has_archive' => 'resource', /* you can rename the slug here */
					'capability_type' => 'post',
					'hierarchical' => false,
					/* the next one is important, it tells what's enabled in the post editor */
					'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt','revisions', 'sticky')
			 	) /* end of options */
			); /* end of register post type */

			/* this adds your post categories to your custom post type */
			register_taxonomy_for_object_type('category', 'news');
			/* this adds your post tags to your custom post type */
			//register_taxonomy_for_object_type('post_tag', 'custom_type');

		}

			// adding the function to the Wordpress init
			add_action( 'init', 'news_post_type');
