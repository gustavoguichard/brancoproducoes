<?php
/**
 * Template Name: Página de Contato
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render(array('contact-page.twig', 'page.twig'), $context);