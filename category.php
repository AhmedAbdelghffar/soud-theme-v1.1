<?php get_header();?>
<div class="content">
<div class="premlink cat">

<h1 class="page-title"><?php single_cat_title(); ?></h1>






<!-----------------------------include categories--------------------->
<?php
$category_id=get_category(get_query_var('cat'))->cat_ID;
$args = array(
'parent' => $category_id,
'orderby'=> 'name',
'order'=> 'ASC',
'hide_empty'=> false,
 );
$categories = get_categories( $args );

if (!empty($categories)) {
    ?>

<div class="products">
<div class="container">
<div class="row">

<?php
foreach($categories as $category) {
if (function_exists('get_wp_term_image'))
{
    $meta_image = get_wp_term_image($category->term_id);
}
?>

<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="item">
									<a href="<?php echo get_category_link( $category->term_id ); ?>" class="thumb-info">
										<img alt="<?php echo $category->name; ?>" class="img-responsive" src="<?php echo $meta_image; ?>">
											<h4 class="text-center"><?php echo $category->name; ?></h4>

									</a>
								</div>
							</div>


<?php
}





// include posts from direct parent category
$categoriesToExclude = array();
foreach ($categories as $category) {
    $categoriesToExclude[] = $category->cat_ID;
}

$current_cat=get_category(get_query_var('cat'))->slug;
$args=array(
    'category_name'  => $current_cat ,
    'posts_per_page' => -1 ,
    'category__not_in' => $categoriesToExclude );
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



<?php
}else{
?>

<!------------------ return posts from current cat------------------>

<div class="products">
<div class="container">
<div class="row">



<?php
$current_cat=get_category(get_query_var('cat'))->slug;
$args=array('category_name'  => $current_cat ,'posts_per_page' => -1);
$object =new WP_Query( $args );
if($object->have_posts()):
while($object->have_posts()):
$object->the_post();?>

<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="item">
									<a href="<?php the_permalink(); ?>">
										<img alt="<?php the_title( ); ?>" class="img-responsive" src="<?php the_post_thumbnail_url(); ?>">
											<h4 class="text-center"><?php the_excerpt( ); ?></h4>
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


<?php
}
?>


</div>
</div>



<?php get_footer();?>
