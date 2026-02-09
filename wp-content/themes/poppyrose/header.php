<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="poppyrose-header">
  <div class="poppyrose-container poppyrose-header-inner">
    <a class="poppyrose-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <?php bloginfo( 'name' ); ?>
    </a>
    <nav class="poppyrose-nav">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container'      => false,
          'fallback_cb'    => false,
          'items_wrap'     => '%3$s',
          'depth'          => 1,
        )
      );
      ?>
    </nav>
    <div class="poppyrose-palette" aria-label="Selettore palette">
      <button class="poppyrose-swatch" type="button" data-palette="red" aria-label="Palette red" style="background: #ff005b;"></button>
      <button class="poppyrose-swatch" type="button" data-palette="blue" aria-label="Palette blue" style="background: #0075a8;"></button>
      <button class="poppyrose-swatch" type="button" data-palette="gold" aria-label="Palette gold" style="background: #f29f05;"></button>
    </div>
    <a class="poppyrose-button secondary" href="<?php echo esc_url( home_url( '/contatti' ) ); ?>">
      Contatti
    </a>
  </div>
</header>
