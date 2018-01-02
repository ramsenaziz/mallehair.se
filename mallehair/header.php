<!DOCTYPE html>
<html lang="sv-se">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?> /assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/manifest.json">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('title'); ?></title>
  	<meta name="description" content="<?php bloginfo('description'); ?>"/>
  <?php wp_head() ?>
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-container">
        <section class="header-section">
          <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo get_home_url() ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/mallehair.png" width="150" height="18" alt="MalleHair">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo get_home_url() ?>">Hem</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#open-hours-section">Öppettider</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#ody">Bilder</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#blog-columns-section">Aktuellt</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pricelist-section">Priser</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#crew-section">Om oss</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#hairproducts-section">Produkter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#find-us-section">Hitta hit</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact-us-section">Kontakta oss</a>
                </li>
              </ul>
              <div class="navbar-brand navbar-brand-inline">
                <div class="fb-like" data-href="https://www.facebook.com/mallehair.fruangen/" data-layout="button" data-action="recommend" data-size="large" data-show-faces="false" data-share="true">
                </div>
              </div>
            </div>
          </nav>    
        </section>

        
        <div id="fb-root"></div>
        <!-- end facebook div-->

        <button onclick="topFunction()" id="myBtn" title="Tillbaka till toppen av sidan">Upp</button>
        <!-- end top button-->