<?php
/**
 * @package WordPress
 * @subpackage Timberland
 * @b3no1t
 */

$context = Timber::context();
$timber_post     = Timber::get_post();
// On appel le current post
$context['post'] = $timber_post;
// On ajoute le menu
$context['menu'] = Timber::get_menu('menu_primary');
// On choisi la vue
Timber::render( 'category-music.twig', $context );
