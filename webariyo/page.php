<?php
/*
Template Name: Full-width layout
Template Post Type: post, product
*/?>
<div dir="rtl" class="container" style="color:white;">
<?php get_header();?>
<div class="row">
<h3 style="color:white;"><?php the_author() ?> </h3>
</div>
<div style="float:left;"><?php the_post_thumbnail('large'); ?> </div>
<?php the_title(); ?>  
<?php the_time(); ?> 
   <?php the_content(); ?>
   <?php comments_template(); ?> 
   <?php get_footer();?>
</div>