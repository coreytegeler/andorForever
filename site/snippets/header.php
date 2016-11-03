<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> — <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php
  echo css( '/assets/css/style.css' );
  // $local = array( '127.0.0.1','localhost', '::1' );
  // if(in_array( $_SERVER['REMOTE_ADDR'], $local ) ):
  //   snippet( 'scss' );
  // else:
  //   echo css( '/assets/css/style.css' );
  // endif;
  echo js(array(
    'assets/js/jquery.js',
    'assets/js/mousewheel.js',
    'assets/js/transit.js',
    'assets/js/imagesloaded.js',
    'assets/js/script.js'
  ));
  ?>
</head>
<body>

  <header class="header cf" role="banner">
   
  </header>