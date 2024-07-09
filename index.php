<!DOCTYPE html>
<html <?php language_attributes() ;?> >
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php bloginfo('name');?></title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
<?php wp_head();  ?>
<!--this function will allow your plugin information i.e. stylesheets javascript etc. to display BEFORE the closing head-->
</head>
<body <?php body_class(); ?>>
<!--our question of the day is
if we have any posts or pages, show them !!!-->

<?php if(have_posts()) : ?>
<!--We need to show the posts by using a while loop in the world of PHP !!!-->
<?php while(have_posts()): the_posts(); ?> 
<?php the_content(); ?>

<?php endwhile; ?>

<?php endif; ?>

</body>
</html>