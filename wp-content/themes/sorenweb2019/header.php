
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="SeyedMostafaMousavi">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?> /images/logosoren.png">
    <title>
      <?php wp_title( '|' , true , 'right' )  ?>
      <?php bloginfo( 'name' );?>
    </title>

    <?php wp_head()?>
  </head>
  <body <?php body_class();?>>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="<?php  bloginfo('URL') ?>"><?php  bloginfo('name') ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
  <?php
      $args = array(
          'menu' => 'header menu',
          'menu_class' => 'navbar-nav mr-auto',
          'container' => 'false'
      );
    
      wp_nav_menu($args);
    
    ?>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>