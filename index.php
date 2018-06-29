<?php get_header();?>
<div class="content">
<div class="premlink">

<?php
if(have_posts()):
while(have_posts()):
the_post();?>
<h1 class="page-title"><?php the_title(); ?></h1>

<div class="container">
<div class="row">

<div class="col-md-9 col-xs-12">
<img class="img-rounded img-responsive" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>"  />
<p><?php the_content(); ?></p>
</div>


<div class="col-md-3 col-xs-12 hidden-xs" >
<div class="sidebar">
<?php dynamic_sidebar('sidebar1') ?>
</div>
</div>

</div>

</div>
</div>


<?php
endwhile;
endif;
?>

<?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs" class="hide">','</p>
');
}
?>


</div>
<?php get_footer();?>
