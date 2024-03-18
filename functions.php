<?php 



//Funçao para registar Scripts

function carrega_scripts(){
	wp_register_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], false, true);
	wp_register_script('script', get_template_directory_uri().'/js/script.js', [], false, true);
	

	wp_enqueue_script(['swiper-script', 'script']);
}

add_action('wp_enqueue_scripts', 'carrega_scripts');

//Funçao para registrar o CSS

function carrega_css(){

	wp_register_style('style', get_template_directory_uri( ) . '/style.css', [], false, false );
	//wp_register_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], false, false );
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'carrega_css');

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

// carrega os campos personalizados do CMB2
require_once get_template_directory() . '/cmb2/load.php';

// Habilitar Menus
add_theme_support('menus');

// Registrar o Menu
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

//Custom Post Projeto

function custom_post_type_projetos() {
	register_post_type('projetos', array(
		'label' => 'projetos',
		'description' => 'projetos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'projetos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'projetos',
			'singular_name' => 'Projeto',
			'menu_name' => 'projetos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Projeto',
			'edit' => 'Editar',
			'edit_item' => 'Editar Projeto',
			'new_item' => 'Novo Projeto',
			'view' => 'Ver Projeto',
			'view_item' => 'Ver Projeto',
			'search_items' => 'Procurar projetos',
			'not_found' => 'Nenhum Projeto Encontrado',
			'not_found_in_trash' => 'Nenhum Projeto Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_projetos');

?>