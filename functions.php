<?php

//ajout des vignettes
add_theme_support( 'post-thumbnails' );

//ajouter une nouvelle zone de menu à mon thème
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Menu De Tete' ));
}
add_action( 'init', 'register_my_menu' );


function init_my_custom()
{
   register_post_type(
       'recette',
       array(
       'label' => 'recettes',
       'labels' => array(
       'name' => 'Recettes',
       'singular_name' => 'Recette',
       'all_items' => 'Toutes les recettes',
       'add_new_item' => 'Ajouter une recette',
       'edit_item' => 'Éditer la recette',
       'new_item' => 'Nouvelle recette',
       'view_item' => 'Voir la recette',
       'search_items' => 'Rechercher parmi les recettes',
       'not_found' => 'Pas de recette trouvée',
       'not_found_in_trash'=> 'Pas de recette dans la corbeille'
       ),
       'public' => true,
       'capability_type' => 'post',
       'supports' => array(
       'title',
       'editor',
       'thumbnail'
       ),
       'has_archive' => true
       )
   );
   register_post_type(
    'voiture',
    array(
    'label' => 'voitures',
    'labels' => array(
    'name' => 'Voitures',
    'singular_name' => 'Voiture',
    'all_items' => 'Toutes les voitures',
    'add_new_item' => 'Ajouter une voiture',
    'edit_item' => 'Éditer la voiture',
    'new_item' => 'Nouvelle voiture',
    'view_item' => 'Voir la voiture',
    'search_items' => 'Rechercher parmi les voitures',
    'not_found' => 'Pas de voiture trouvée',
    'not_found_in_trash'=> 'Pas de voiture dans la corbeille'
    ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
    'title',
    'editor',
    'thumbnail'
    ),
    'has_archive' => true
    )
);
}
add_action('init', 'init_my_custom');

