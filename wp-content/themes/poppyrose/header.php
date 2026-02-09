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
    <div class="poppyrose-header-left">
      <nav class="poppyrose-nav" aria-label="Navigazione principale">
        <?php
        if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu(
            array(
              'theme_location' => 'primary',
              'container'      => false,
              'fallback_cb'    => false,
              'items_wrap'     => '<ul class="poppyrose-nav-list">%3$s</ul>',
              'depth'          => 1,
            )
          );
        } else {
          echo '<ul class="poppyrose-nav-list">';
          echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
          echo '<li><a href="' . esc_url( home_url( '/collezioni' ) ) . '">Collezioni</a></li>';
          echo '<li><a href="' . esc_url( home_url( '/storia' ) ) . '">Storia</a></li>';
          echo '<li><a href="' . esc_url( home_url( '/contatti' ) ) . '">Contatti</a></li>';
          echo '</ul>';
        }
        ?>
      </nav>
    </div>

    <a class="poppyrose-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img
        class="poppyrose-logo-img"
        src="<?php echo esc_url( get_template_directory_uri() . '/assets/logos/logo-red.svg' ); ?>"
        data-logo-red="<?php echo esc_url( get_template_directory_uri() . '/assets/logos/logo-red.svg' ); ?>"
        data-logo-blue="<?php echo esc_url( get_template_directory_uri() . '/assets/logos/logo-blue.svg' ); ?>"
        data-logo-gold="<?php echo esc_url( get_template_directory_uri() . '/assets/logos/logo-gold.svg' ); ?>"
        alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
      >
    </a>

    <div class="poppyrose-header-right">
      <div class="poppyrose-palette" aria-label="Selettore palette">
        <button class="poppyrose-swatch" type="button" data-palette="red" aria-label="Palette red" style="background: #ff005b;"></button>
        <button class="poppyrose-swatch" type="button" data-palette="blue" aria-label="Palette blue" style="background: #0075a8;"></button>
        <button class="poppyrose-swatch" type="button" data-palette="gold" aria-label="Palette gold" style="background: #f29f05;"></button>
      </div>
      <a class="poppyrose-button secondary" href="<?php echo esc_url( home_url( '/contatti' ) ); ?>">
        Contatti
      </a>
    </div>
  </div>
</header>
