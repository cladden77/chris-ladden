<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <?php
  /* Theme color for browsers that support it
  <meta name="theme-color" content="#000">
  */
  ?>

  <!-- First try loading jQuery from Google's CDN -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  
  <!-- Fall back to a local copy of jQuery if the CDN fails -->
  <script>
    window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"><\/script>');
  </script>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php if (is_search()) { ?>
   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

  <?php if ( is_singular() && comments_open() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php // Header ?>
  <header>
    <?php get_template_part('parts/partials/header'); ?>
  </header>

  <?php // Main Content ?>
  <main>
