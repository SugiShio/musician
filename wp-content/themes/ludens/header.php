<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="loading">
    <div class="loading__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/loading.png" alt="">
    </div>
    <p class="loading__text">Loading...</p>
  </div>
  <?php get_template_part('components/header'); ?>
  <?php get_template_part('components/menu'); ?>
  <?php if(is_home()) : ?>
    <main class="content-top">
  <?php else : ?>
    <main class="content">
  <?php endif; ?>
