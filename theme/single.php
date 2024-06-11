<?php
/**
 * @package WordPress
 * @subpackage Timberland
 * @since Timberland 2.0.1
 */

$context         = Timber::context();
$timber_post     = Timber::get_post();
// Use the global query.
$posts = Timber::get_posts();

// Query recettes
$context['recettes'] = Timber::get_posts([
    'post_type' => 'recette'
]);
// Query worpdress
$context['sacs'] = Timber::get_posts([
    'post_type' => 'sac-a-main'
]);
// Query worpdress
$context['movies'] = Timber::get_posts([
    'post_type' => 'movies'
]);
// Requete worpdress sur le POST TYPE poisson
$context['poissons'] = Timber::get_posts([
    'post_type' => 'poisson'
]);




if ( post_password_required( $timber_post->ID ) ) {
	Timber::render( 'single-password.twig', $context );
} else {
	Timber::render( array( 'single-' . $timber_post->ID . '.twig', 'single-' . $timber_post->post_type . '.twig', 'single-' . $timber_post->slug . '.twig', 'single.twig' ), $context );
}
