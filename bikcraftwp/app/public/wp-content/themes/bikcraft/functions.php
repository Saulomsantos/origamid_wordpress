<?php

// Função para registrar os Scripts e o CSS
function origamid_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o jQuery Novo
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-1.11.2.min.js', array(), "1.11.2", true );

	// Registrar Plugins
	wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), false, true );

	// Registrar Main
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'plugins-script' ), false, true );

	// Registrar Modernizr
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.45655.js', array(), "45655", false );

	// Carrega o Script
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'main-script' );	
}
add_action( 'wp_enqueue_scripts', 'origamid_scripts' );

function origamid_css() {
	wp_register_style( 'origamid-style', get_template_directory_uri() . '/style.css', array(), false, false );
	wp_enqueue_style( 'origamid-style' );
}
add_action( 'wp_enqueue_scripts', 'origamid_css' );

/*
	Para a versão nova do Bikcraft

	// Função para registrar os Scritps e o CSS
function origamid_scripts() {
	// Define o que será registrado, onde está, se é independente ou não (com [] ou array() estabelece que sim),
	// versão (false se não tiver versão), se aparece no header ou no footer (true para footer)
	wp_register_scripts('simple-slide', get_template_directory_uri() . '/js/simple-slide.js', [], false, true );
	wp_register_scripts('simple-anime', get_template_directory_uri() . '/js/simple-anime.js', [], false, true );
	wp_register_scripts('simple-form', get_template_directory_uri() . '/js/simple-form.js', [], false, true );
	wp_register_scripts('script', get_template_directory_uri() . '/js/script.js', ['simple-slide', 'simple-anime', 'simple-form'], false, true );

	// Função para carregar os scripts
	wp_enqueue_script('script');
}
// Define quando ocorre a função ( 'quando', 'quem' )
add_action( 'wp_enqueue_scripts', 'origamid_scripts' );
*/

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Registrar Menus
function register_my_menu() {
	register_nav_menu('menu-principal',__( 'Menu Principal' ));
  }
  add_action( 'init', 'register_my_menu' );

// Custom Images Sizes
function my_custom_sizes() {
    add_image_size('large', 1400, 380, true);
    add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');

// Custom Post Type
function custom_post_type_produtos() {
	register_post_type('produtos', array(
		'label' => 'Produtos',
		'description' => 'Produtos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'produtos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Produtos',
			'singular_name' => 'Produto',
			'menu_name' => 'Produtos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Produto',
			'edit' => 'Editar',
			'edit_item' => 'Editar Produto',
			'new_item' => 'Novo Produto',
			'view' => 'Ver Produto',
			'view_item' => 'Ver Produto',
			'search_items' => 'Procurar Produtos',
			'not_found' => 'Nenhum Produto Encontrado',
			'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_produtos');

?>