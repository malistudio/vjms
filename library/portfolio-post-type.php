<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function portfolio_post() { 
	// creating (registering) the custom type 
	register_post_type( 'portfolio', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Portfolio', 'vjms' ), /* This is the Title of the Group */
			'singular_name' => __( 'Portfolio Post', 'vjms' ), /* This is the individual type */
			'all_items' => __( 'All Portfolio Posts', 'vjms' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'vjms' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Portfolio Post', 'vjms' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'vjms' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Portfolio Post', 'vjms' ), /* Edit Display Title */
			'new_item' => __( 'New Portfolio Post', 'vjms' ), /* New Display Title */
			'view_item' => __( 'View Portfolio Post', 'vjms' ), /* View Display Title */
			'search_items' => __( 'Search Portfolio Post', 'vjms' ), /* Search Portfolio Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'vjms' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'vjms' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the portfolio post type', 'vjms' ), /* Portfolio Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-visibility', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'portfolio', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'portfolio', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'portfolio' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'portfolio' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'portfolio_post');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
	register_taxonomy( 'custom_cat', 
		array('portfolio'), /* if you change the name of register_post_type( 'portfolio', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Portfolio Categories', 'vjms' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Portfolio Category', 'vjms' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Portfolio Categories', 'vjms' ), /* search title for taxomony */
				'all_items' => __( 'All Portfolio Categories', 'vjms' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Portfolio Category', 'vjms' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Portfolio Category:', 'vjms' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Portfolio Category', 'vjms' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Portfolio Category', 'vjms' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Portfolio Category', 'vjms' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Portfolio Category Name', 'vjms' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'custom-slug' ),
		)
	);
	
	// now let's add custom tags (these act like categories)
	register_taxonomy( 'custom_tag', 
		array('portfolio'), /* if you change the name of register_post_type( 'portfolio', then you have to change this */
		array('hierarchical' => false,    /* if this is false, it acts like tags */
			'labels' => array(
				'name' => __( 'Portfolio Tags', 'vjms' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Portfolio Tag', 'vjms' ), /* single taxonomy name */
				'search_items' =>  __( 'Search Portfolio Tags', 'vjms' ), /* search title for taxomony */
				'all_items' => __( 'All Portfolio Tags', 'vjms' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Portfolio Tag', 'vjms' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Portfolio Tag:', 'vjms' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Portfolio Tag', 'vjms' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Portfolio Tag', 'vjms' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Portfolio Tag', 'vjms' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Portfolio Tag Name', 'vjms' ) /* name title for taxonomy */
			),
			'show_admin_column' => true,
			'show_ui' => true,
			'query_var' => true,
		)
	);
	
	/*
		looking for custom meta boxes?
		check out this fantastic tool:
		https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
	*/
	

?>
