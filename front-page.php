
<?php get_header();?>
<div class="content">
<div class="front-page">








<!--- slider---->
<div id="myCarousel" class="carousel slide main-slider " data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">

     <?php
     $args=array('post_type'  => 'slider','order' => 'ASC');
     $slider =new WP_Query( $args );
     if($slider->have_posts()){
       while($slider->have_posts()){
       $slider->the_post();

     ?>

      <li data-target="#myCarousel" data-slide-to="<?php echo $slider->current_post; ?>" class="<?php if($slider->current_post == 0){ ?> active <?php } ?>"></li>


      <?php }}
     wp_reset_postdata();
     ?>
  </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

 <?php
   $args=array('post_type'  => 'slider','order' => 'ASC');
   $slider =new WP_Query( $args );
   if($slider->have_posts()){
     while($slider->have_posts()){
     $slider->the_post();

   ?>




	<div class="item <?php if($slider->current_post == 0){ ?> active <?php } ?> ">
        <img  src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"  alt="<?php the_title(  ); ?>"/>
        <div class="carousel-caption hidden-xs" >
           <div class="carousel-caption-inner wow slideInDown" data-wow-duration="3s" data-wow-delay=".1s">
           <?php the_content(  ); ?>
           </div>
         </div>
      </div>

  <?php }}
   wp_reset_postdata();
   ?>

    <!-- Left and right controls -->
    <a class="right carousel-control" data-target="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <a class="left carousel-control" data-target="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    </div>
</div>

<!-- --------------------------------------------------------------------->



<!-- about-->
<div class="about section">
<div class="container">
<div class="row">

<div class="col-md-6 wow slideInLeft" data-wow-duration="3s" data-wow-delay=".1s">
  <br>
  <br>
<h3>WELCOME TO MARAYA CLINIC</h3>
<h1> <?php echo get_theme_mod('be4_heading'); ?> </h1>
<p>  <?php echo get_theme_mod('be4_text'); ?> </p>
</div>

<div class="col-md-6 wow slideInRight" data-wow-duration="3s" data-wow-delay=".1s">
<img src="<?php echo get_template_directory_uri(); ?>/photos/about.png" class="img-responsive"  />
</div>





</div>
</div>
</div>
<!------------------------------------------------------------------------------------------------------------------->













<!--service-home------>

<div class="service-home">
<div class="overlay-layer section">
<div class="container">
<h2 class="section-title"> OUR <span>SERVICESS</span>  </h2>

<div class="row">
<?php
  $args=array('post_type'  => 'services','order' => 'ASC');
  $object =new WP_Query( $args );
  if($object->have_posts()){
    while($object->have_posts()){
    $object->the_post();
  ?>
<div class="col-md-4">
<div class="item slideInDown" data-wow-duration="1s" data-wow-delay="1s">
<img  src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"  alt="<?php the_title(  ); ?>"/>
<div class="desreption">
<h3><?php the_title();?></h3>
<div class="sep"></div>
<br>
<?php the_excerpt();?>
<a href="<?php the_permalink();?> ">
<button class="btn">Read More</button>
</a>

</div>
</div>
</div>
<?php }}
 wp_reset_postdata();
 ?>
</div>

</div>
</div>
</div>
<!---------------------------------------------------------------------------------->
<div class="fitness">
<div class="overlay section">
<div class="container">
<h2 class="section-title"> body <span>re-shaping</span>  </h2>
<div class="row">
<div class="col-md-6">
<h3>Integrated Triple Body Contouring System</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<div class="col-md-6">
  <br>
  <div class="equation-form">

  <p><span class="label">Your Height:</span> <input type="text" class="form-control" id="height" required />

       </p>
  <p><span class="label">Your Weight:</span> <input type="text" class="form-control" id="weight" required/>

  </p>

  <div class="text-center">
  <input type="submit" value="Calculate Body mass index" onclick="computeBMI();" class="btn btn-primary">
  </div>
  <br>
  <h5> <span id="output"></span></h5>
  <h5> <span id="comment"></span> </h5>
</div>
</div>
</div>
</div>
</div>
</div>
<!------------------------------------------------------------------------>
<div class="articles section">
<div class="overlay-layer ">
<div class="container">
<h2 class="section-title"> articles  </h2>

<div class="row">
<?php
  $args=array('category_name'  => 'articles','order' => 'ASC');
  $object =new WP_Query( $args );
  if($object->have_posts()){
    while($object->have_posts()){
    $object->the_post();
  ?>
<div class="col-md-4">
<div class="item">
<img  src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-rounded"  alt="<?php the_title(  ); ?>"/>
<h3><?php the_title();?></h3>
</div>
</div>
<?php }}
 wp_reset_postdata();
 ?>
</div>

</div>
</div>
</div>



</div>
</div>
<?php get_footer();?>
