<?php
/**
 * @package WordPress
 * @subpackage Timberland
 *
 */

$context = Timber::context();
$timber_post     = Timber::get_post();
// On appel le current post
$context['post'] = $timber_post;
// On ajoute le menu
$context['menu'] = Timber::get_menu('menu_primary');
//!QUERY---------------
$context['musics'] = Timber::get_posts([
    'post_type' => 'music'
]);

$context['music_big_item'] = Timber::get_posts([
    'post_type' => 'music',
    'posts_per_page'=> 1,
    'order'=>'DESC'
]);
$context['music_small_item'] = Timber::get_posts([
    'post_type' => 'music',
    'posts_per_page'=> 3,
    'order'=>'DESC',
    'offset' => 1
]);



// On choisi la vue
Timber::render( 'category-music.twig', $context );
