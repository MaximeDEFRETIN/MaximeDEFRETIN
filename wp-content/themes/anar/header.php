<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
          </a>
          <?php wp_nav_menu(array('theme_location' => 'main',
                                  'container' => '',
                                  'menu_class' => 'header__menu',)); ?>
        </header>
        <?php if (is_user_logged_in()): get_currentuserinfo() ?>
            <p><?= $current_user->user_firstname ?> <a href="<?= wp_logout_url() ?>">Déconnexion</a></p>
        <?php else: ?>
            <p><a href="<?= wp_login_url() ?>">Connexion</a></p>
        <?php endif; ?>
        <?php wp_body_open(); ?>