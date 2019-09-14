<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<div class="mainmenu">
	<div class="container">
    <nav class="navbar navbar-expand-lg">
  <?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$custom_logo_url = $logo[0];

  ?>

  <a href="<?php bloginfo(url);?>"><img src="<?php echo $custom_logo_url;?>" class="logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="mr-auto"></div>
    <?php
    wp_nav_menu(

array(
'theme_location' => 'top-menu',
'container' => 'ul',
'menu_class' => 'navbar-nav'
)
    );
    ?>
    <!--- 
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  -->
  </div>
</nav> 
</div>
</div>

</header>
