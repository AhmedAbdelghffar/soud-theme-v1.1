<!DOCTYPE html>
<html lang="ar">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="0qYAV4Fp82Tyx5XNYkrkt-68wlaxYXbSrPxx2tD67A8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="wrapper">


<div class="header">


                  <?php
  // Fix menu overlap
  if ( is_admin_bar_showing() ){
      ?>   <nav class="navbar navbar-fixed-top" style="top:32px;"><?php
      }else{
?>


        <nav class="navbar navbar-fixed-top">
<?php } ?>

        <div class="contact-header ">
        <div class="container hidden-xs">


        <ul class="ul">
        <li class="social">
          <span>/</span>
             <a  target="_blank" class="google-event" rel="nofollow" href="<?php echo get_theme_mod('be4_facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
             <a target="_blank" rel="nofollow" href="<?php  echo get_theme_mod('be4_twitter'); ?>"><i id="last" class="fa fa-twitter" aria-hidden="true"></i></a>
        </li>


        <li>
        <a href="mailto:<?php echo get_theme_mod('be4_mail'); ?>" ><i class="fa fa-envelope"></i> <?php echo get_theme_mod('be4_mail'); ?> </a>
        </li>
        </ul>



        <div class="col-md-6 pull-left">
          <ul class="ul">
          <li>

          <a href="tel:<?php echo get_theme_mod('be4_telephone'); ?>"><i class="fa fa-phone"></i> <?php echo get_theme_mod('be4_telephone'); ?> </a>
          </li>
          <li>
            <span>/</span>
          <a href="/contact-us"><i class="fa fa-map-marker"></i> <?php echo get_theme_mod('be4_address'); ?> </a>
          </li>
        </ul>
        </div>


        </div>
        </div>





<!--navigation-->
        <div class="container">

            <!-- mobile display -->

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

             <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo get_theme_mod('be4_logo'); ?>"  class="img-responsive logo" alt="<?php echo get_theme_mod('be4_logo'); ?>" /></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



                    <?php

                $menu=array(
                  'menu' => 'Mune 1',
                  'depth' => 2,
                   'container' => false,
                   'menu_class' => 'nav navbar-nav navbar-right',
                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                   'walker'            => new wp_bootstrap_navwalker()


                );

                wp_nav_menu( $menu);


                ?>





            </div>
          </div>
          <!-- /.navbar-collapse -->

        </nav>





  </div>
