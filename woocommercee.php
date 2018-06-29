
<?php get_header();?>
<div class="content">
<div class="premlink">

<?php 
if(have_posts()):
the_post();?>    
<h1 class="page-title"><?php the_title(); ?></h1>
<div class="container">
<?php woocommerce_content(); ?>
</div>
<?php 
endif;
?>


</div>
</div>


<?php get_footer();?>


