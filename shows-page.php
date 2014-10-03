<?php
/**
 * Template Name: Shows page
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

global $paged;
if (!isset($paged) || !$paged){
  $paged = 1;
}
$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$args = array(
  'post_type' => 'show',
  'paged' => $paged,
  'orderby' => 'asc'
);
/* THIS LINE IS CRUCIAL */
/* in order for WordPress to know what to paginate */
/* your args have to be the defualt query */
query_posts($args);
/* make sure you've got query_posts in your .php file */
$context['posts'] = Timber::get_posts();
$context['pagination'] = Timber::get_pagination();
Timber::render(array('shows-page.twig', 'page.twig'), $context);