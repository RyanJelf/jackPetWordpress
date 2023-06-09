<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php single_post_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<div id="container">
   <header id="main-header">	
<nav id="main_nav">
<?php wp_nav_menu (array(
'theme_location' => 'primary', 
	'depth' => 0
));	?>
</nav>
   </header>
   <div class="content">
