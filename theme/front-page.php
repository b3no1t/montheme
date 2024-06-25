<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package WordPress
 * @subpackage Timberland
 * @since Timberland 1.2.0
 */

$context = Timber::context();

// WP Query sur le CPT (custom post type)
// et donc des a present accéssible dans la vue
$context['recette'] = Timber::get_posts([
    'post_type' => 'recette'
]);

$context['tortues'] = Timber::get_posts([
    'post_type' => 'tortue'
]);

$context['poissons'] = Timber::get_posts([
    'post_type' => 'poisson'
]);

$context['musics'] = Timber::get_posts([
    'post_type' => 'music'
]);


$context['menu'] = Timber::get_menu('menu_primary');

//rendu de la page
Timber::render('front-page.twig', $context);
