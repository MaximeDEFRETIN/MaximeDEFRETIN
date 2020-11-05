<?php

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag'); 

register_sidebar(array(
    'id' => 'blog-sidebar',
    'name' => 'Blog',
    'before_widget'  => '<div class="site__sidebar__widget %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<p class="site__sidebar__widget__title">',
    'after_title' => '</p>',
));

function anar_remove_menu_pages() {
    remove_menu_page('tools.php');
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'anar_remove_menu_pages');

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

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

function anar_register_assets() {
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
add_action('wp_enqueue_scripts', 'anar_register_assets');