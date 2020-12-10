<?php

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	));
add_theme_support('custom-background');
add_theme_support('editor-styles');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('automatic-feed-links');

require_once 'inc/customizer/custom-control.php';

register_sidebar(array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
    'before_widget'  => '<div class="site__sidebar__widget %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<p class="site__sidebar__widget__title">',
    'after_title' => '</p>',
));

//function anar_remove_menu_pages() {
//    remove_menu_page('tools.php');
//    remove_menu_page('edit-comments.php');
//}
//add_action('admin_menu', 'anar_remove_menu_pages');

register_nav_menus(array(
    'main' => 'Menu principal',
    'footer' => 'Bas de page',
));

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');
// Définir la taille des images mises en avant
set_post_thumbnail_size(2000, 400, true);

//// Définir d'autres tailles d'images
//add_image_size('products', 800, 600, false); // 'products' ou 'square' désigne le paramètreà utiliser avec
//add_image_size('square', 256, 256, false);   // the_post_thumbnail(), exemple : the_post_thumbnail('square')

// Configuration du thème
require_once get_template_directory().'/inc/config.php';
// Types de publication et taxonomies
require_once get_template_directory().'/inc/post-types.php';
// Fonctionnalités
require_once get_template_directory().'/inc/features.php';

function anar_register_style() {
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'anar',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'anar', 
        get_template_directory_uri().'/assets/css/main.css',
        array(), 
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'anar_register_style');

function anar_register_script() {
    // Déclarer jQuery
    wp_enqueue_script( 
        'jquery', 
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
        false, 
        '3.3.1', 
        true 
    );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'anar', 
        get_template_directory_uri().'/assets/js/scripts.js', 
        array('jquery'), 
        '1.0', 
        true
    );
}
add_action('wp_enqueue_scripts', 'anar_register_script');

/**
 * Permet de créer une CPT
 */
//function nanarchiste () {
//    // CPT Portfolio
//    $labels = array(
//        'name' => 'Portfolio', // Nom de la page CPT
//        'all_items' => 'Projets Portfolio',  // affiché dans le sous menu
//        'singular_name' => 'Projet',  //
//        'add_new_item' => 'Ajouter un projet',  // Ajout d'une taxonomie
//        'edit_item' => 'Modifier le projet',  // Permet d'étiter une taxonomie
//        'menu_name' => 'Portfolio', // Nom du CPT dans le menu
//        'new_item_name' => 'Nom du nouveau Projet', // Permet de donner un nom à une taxonomie
//    	  'parent_item' => 'Type de projet parent', // Permet de créer des items parents
//    );
//
//    $args = array(
//        'labels' => $labels,
//        'public' => true,  // Si on accepte que le contenu de la CPT soit affiché, ou non, sur le site
//        'show_in_rest' => true,  // Active la création d'une taxonomie
//        'hierarchical' => true,  // permet de créer des hiérarchies
//        'has_archive' => true,  // On décide si c'est une archive, ou non
//        'supports' => array('title', 'editor','thumbnail'),  //
//        'menu_position' => 5,  // Position dans le menu
//        'menu_icon' => 'dashicons-admin-customizer',  // Icône du CPT
////  	  'menu_icon' => 'dashicons-portfolio',
////        'menu_icon' => get_template_directory_uri().'/assets/img/cpt-icon.png',
////        'menu_icon' => 'data:image/svg+xml;base64,'.base64_encode("<svg>...</svg>"),
//    );
//
//    register_post_type('portfolio', $args);
//    
//    register_taxonomy('type-projet', 'portfolio', $args);
//    
//    // Assigner à plusieurs CPT
//    register_taxonomy('type-projet', array('portfolio', 'autre'), $args);
//    
//}
//add_action('init', 'nanarchiste');