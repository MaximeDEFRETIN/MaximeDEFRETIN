<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Suki
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
<?php function generated_favicons() {
    echo '
    <link rel="icon" sizes="57x57" href="'.get_stylesheet_directory_uri().'/assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-180x180.png">
    <link rel="apple-touch-icon-precomposed" href="'.get_stylesheet_directory_uri().'/assets/img/apple-icon-57x57.png" />
    <link rel="icon" type="image/png" sizes="192x192"  href="'.get_stylesheet_directory_uri().'/assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="'.get_stylesheet_directory_uri().'/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="'.get_stylesheet_directory_uri().'/assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="'.get_stylesheet_directory_uri().'/assets/img/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="'.get_stylesheet_directory_uri().'/assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    ';
}
add_action('wp_head', 'generated_favicons'); ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php
		/**
		 * Hook: wp_body_open
		 *
		 * `wp_body_open` is a native theme hook available since WordPress 5.2
		 */
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		} else {
			do_action( 'wp_body_open' );
		}

		/**
		 * Hook: suki/frontend/before_canvas
		 *
		 * @hooked suki_skip_to_content_link - 1
		 * @hooked suki_mobile_vertical_header - 10
		 */
		do_action( 'suki/frontend/before_canvas' );
		?>

		<div id="canvas" class="suki-canvas">
			<div id="page" class="site">

				<?php
				/**
				 * Hook: suki/frontend/before_header
				 */
				do_action( 'suki/frontend/before_header' );

				/**
				 * Header
				 */
				suki_header();

				/**
				 * Hook: suki/frontend/after_header
				 *
				 * @hooked suki_page_header - 10
				 */
				do_action( 'suki/frontend/after_header' );

				/**
				 * Content - opening tag
				 */
				if ( apply_filters( 'suki/frontend/show_content_wrapper', true ) ) {
					suki_content_open();
				}