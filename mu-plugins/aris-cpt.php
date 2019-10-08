<?php
function aris_post_types()
{

	register_post_type('testimonials', array(
		'has_archive' => false,
		'rewrite'     => array('slug' => 'testimonials'),
		'supports'    => array('title'),
		'public'      => true,
		'labels'      => array(
			'name'          => 'Tesimonials',
			'add_new_item'  => 'Add New Testimonial',
			'edit_item'     => 'Edit Testimonial',
			'all_items'     => 'All Testimonials',
			'singular_name' => 'Testimonial'
		),
		'menu_icon' => 'dashicons-format-status'
	));


	register_post_type('portfolios', array(
		'has_archive' => true,
		'rewrite'     => array('slug' => 'portfolios'),
		'supports'    => array('title', 'editor'),
		'public'      => true,
		'labels'      => array(
			'name'          => 'Portfolios',
			'add_new_item'  => 'Add New Portfolio',
			'edit_item'     => 'Edit Portfolio',
			'all_items'     => 'All Portfolios',
			'singular_name' => 'Portfolio'
		),
		'menu_icon' => 'dashicons-feedback'
	));


	register_post_type('team', array(
		'has_archive' => false,
		'rewrite'     => array('slug' => 'team'),
		'supports'    => array('title'),
		'public'      => true,
		'labels'      => array(
			'name'          => 'Team',
			'add_new_item'  => 'Add New Employee',
			'edit_item'     => 'Edit Employee',
			'all_items'     => 'All Employees',
			'singular_name' => 'Team'
		),
		'menu_icon' => 'dashicons-groups'
	));

	register_post_type('services', array(
		'has_archive' => false,
		'rewrite'     => array('slug' => 'services'),
		'supports'    => array('title', 'editor'),
		'public'      => true,
		'labels'      => array(
			'name'          => 'Services',
			'add_new_item'  => 'Add New Service',
			'edit_item'     => 'Edit Service',
			'all_items'     => 'All Services',
			'singular_name' => 'Service'
		),
		'menu_icon' => 'dashicons-cart'
	));
}

add_action('init', 'aris_post_types');
