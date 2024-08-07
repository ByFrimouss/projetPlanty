<?php

// ACTIVATION DU THÈME //
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

//POUR RELIER LE CSS DU THÈME PARENT //
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

//POUR RELIER LE CSS DU THÈME ENFANT //
wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// METTRE EN PLACE LE HOOK DU LIEN ADMIN //
function ajout_lien_admin($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajout_lien_admin', 10, 2);
?>