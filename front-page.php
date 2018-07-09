
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
           <?php $option_value = fw_get_db_post_option(get_the_ID(), 'slider_caption'); 
           
           ?>
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

<!-- ---------------------------------------------------------------------->

<div class="ui inverted menu">
  <a class="active item">
    Home
  </a>
  <a class="item">
    Messages
  </a>
  <a class="item">
    Friends
  </a>
</div>

<br>
<br>
<div class="ui grid container">
  <div class="four wide column">one</div>
  <div class="four wide column">two</div>
  <div class="four wide column">three</div>
  <div class="four wide column">four</div>
  <div class="four wide column">five</div>
  <div class="four wide column">six</div>
  <div class="four wide column">seven</div>
  <div class="four wide column">eight</div>
</div>
<!------------------------------------------------------------------------------>

</div>
</div>
<?php get_footer();?>
