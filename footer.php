
<?php wp_footer(); ?>
<?php global $soud_builder; 
 $option_value = fw_get_db_settings_option('option_1');


?>

<div class="footer" id="footer">
<div class="container">
<br>
<div class="row">


<div class="col-md-4 col-xs-12">
  <h4><?php var_dump($option_value); ?></h4>
<div class="social">
          <a  target="_blank" rel="nofollow" href="<?php echo $soud_builder['social-network']['facebook'];  ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a  target="_blank" rel="nofollow" href="<?php echo $soud_builder['social-network']['twitter'];  ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a target="_blank" rel="nofollow" href="<?php echo $soud_builder['social-network']['instagram'];  ?>"><i id="last" class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a target="_blank" rel="nofollow" href="<?php echo $soud_builder['social-network']['linkedin'];  ?>"><i id="last" class="fa fa-google-plus" aria-hidden="true"></i></a>
          <a target="_blank" rel="nofollow" href="<?php echo $soud_builder['social-network']['google-plus'];  ?>"><i id="last" class="fa fa-twitter" aria-hidden="true"></i></a>
          <a target="_blank" rel="nofollow" href="<?php echo $soud_builder['social-network']['youtube'];  ?>"><i id="last" class="fa fa-youtube" aria-hidden="true"></i></a>
</div>
<a href="mailto:<?php echo $soud_builder['mail']; ?>" ><i class="fa fa-envelope"></i> <?php echo $soud_builder['mail']; ?> </a>
</div>








<div class="col-md-5 col-xs-12">
<div>
<h4>Contact Us</h4>

<p><i class="fa fa-map-marker"></i><?php echo $soud_builder['address']; ?></p>
<a href="tel:<?php echo $soud_builder['opt-phone']; ?>"><i class="fa fa-phone"></i><?php echo $soud_builder['phone']; ?></a>

</div>
</div>


<div class="col-md-3 col-xs-12">
<h4> Important Links </h4>
          		<div class="footer-menu">
					    		 <?php
                $menu=array(

                  'menu' => 'Menu 2',

                  'depth' => 2,

                   'container' => false,

                   'menu_class' => 'mune-footer',

                   'menu_id' => 'menu-footer',
                );
                wp_nav_menu( $menu);
                ?>
					    </div>
</div>





</div>
</div>



<div class="copyrights">
<p class="text-center">All Rights Reserved @2018 Developed By <a href="http://www.be4e-marketing.com/"  rel="follow" style="color:orange!important">Be Digital Agency</a></p>
</div>








</div>















</div>

<?php
function wow_init() { ?>
	<script type="text/javascript">
		new WOW().init();
	</script>
<?php } ?>
</body>





</html>
