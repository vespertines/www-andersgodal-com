<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title( "Anders Godal Design + Direction —", true, "Left" ); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icon.png">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <nav>
            <ul>
              <li>
                <a class="link" href="/#profile">Profile</a>
              </li>
              <li>
                <a class="link" href="/#contact">Contact</a>
              </li>
            </ul>

            <div>
              <span></span>
              <span></span>
            </div>
          </nav>
        </div>

        <div class="col-9">
          <a href="/"><h1>Anders Godal <span>Design + Direction</span></h1></a>
        </div>
      </div>
    </div>
    
  </header>

  <div class="overlay">
    <nav>
      <ul>
        <li>
          <a class="link" href="/#profile">Profile</a>
        </li>
        <li>
          <a class="link" href="/#contact">Contact</a>
        </li>
      </ul>
    </nav>

    <div>
      <a href="mailto:hello@andersgodal.com">hello@andersgodal.com</a>
      <a href="tel:+4798615707">+47 986 15 707</a>
      <a href="https://www.linkedin.com/in/anders-godal-35b6039/" target="_blank">LinkedIn</a>
    </div>

    <span>&copy; <?php echo date("Y"); ?> Anders Godal</span>
  </div>
