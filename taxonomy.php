<?php get_header();?>
<div class="content">
<div class="premlink tax">

<h1 class="page-title"><?php single_cat_title(); ?></h1>

<div class="container">

<?php
echo $qobj->taxonomy;
$qobj = get_queried_object();
$post_type=str_replace("-type","",$qobj->taxonomy);
$args = array(
    'posts_per_page' => -1,
    'post_type' => $post_type,
    'tax_query' => array(
      array(
        'taxonomy' => $qobj->taxonomy,
        'field' => 'id',
        'terms' => $qobj->term_id
    ))
  );

$object =new WP_Query( $args );
if($object->have_posts()):
while($object->have_posts()):
$object->the_post();?>

<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="item">
									<a href="<?php the_permalink(); ?>">
										<img alt="<?php the_title( ); ?>" class="img-responsive center-img" src="<?php the_post_thumbnail_url(); ?>">
											<h4 class="text-center"><?php the_title( ); ?></h4>
									</a>
								</div>
							</div>

<?php
endwhile;
endif;
?>



</div>
</div>
</div>


<?php get_footer();?>
