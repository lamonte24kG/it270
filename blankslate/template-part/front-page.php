<?php get_header(); 
/*Template Name: Front Page*/
?>
<div id="wrapper" class="hfeed">
<div id="container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?><!--This might be whats causing company home page to size this area to width 63%  -->

<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?><!--not working, sidebar not showingmn,jn -->
</div>
<!-- end wrapper --> 
<?php get_footer();