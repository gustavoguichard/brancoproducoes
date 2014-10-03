<?php
/**
 * Template Name: Página Quem Somos
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$args = 'post_type=post&numberposts=-1&orderby=asc';
$context['posts'] = Timber::get_posts($args);
Timber::render(array('about-page.twig', 'page.twig'), $context);