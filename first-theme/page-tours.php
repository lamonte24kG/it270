<?php
get_header();
/* Template Name: Tours Page */
?>
<!--the index.php page is assigned to the blog page!!!-->
<!--our question of the day is
if we have any posts or pages, show them !!!-->

<div id="hero">
<img src="<?php echo get_template_directory_uri();?>/images/yellowstone-inner.jpg" alt="Yellowstone">
</div>

<div id="wrapper">
<main>
<?php if(have_posts()) : ?>
<?php  if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink() ;?>">
<?php the_post_thumbnail(); ?>
</a>
<?php endif ?>
<!--We need to show the posts by using a while loop in the world of PHP !!!-->
<?php while(have_posts()): the_post(); ?> 
<?php the_content(); ?>
<?php endwhile; ?>
<?php else :  ?>
<h2>
<?php echo wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif; ?>
</main>



<aside id="secondary" class="widget-area">
<?php dynamic_sidebar('sidebar-tours'); ?>

<?php dynamic_sidebar('sidebar-tours-specials'); ?>

</aside>

</div>
<!-- close wrapper -->
<?php dynamic_sidebar('sidebar-buy'); ?>

<?php
get_footer();
?>