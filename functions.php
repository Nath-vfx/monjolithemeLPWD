<?php
//ajouter une nouvelle zone de menu à mon thème
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Menu De Tete' ));
}
add_action( 'init', 'register_my_menu' );
