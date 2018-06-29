<?php get_header();?>
<div class="content">
<!---contact---->
<div class="contact">
<h1 class="page-title">contact us</h1>
<div class="container">

<div class=row>


<div class="col-lg-5 col-sm-12 col-xs-12" >

   <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
</div>


<div class="col-lg-7 col-sm-12 col-xs-12" >
<br>
<br>
<p><i class="fa fa-map-marker"></i><?php echo $soud_builder['address']; ?></p>
<a href="tel:<?php echo $soud_builder['opt-phone']; ?>"><i class="fa fa-phone"></i><?php echo $soud_builder['phone']; ?></a>
<div id="map" style="height:300px;"></div>
     <script>

      function initMap() {
        var myLatLng = {lat: 30.128478, lng: 31.374249};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 19,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <br>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuZvHphihk-q3H8E8ZnSrakP6yCXkSs2M&callback=initMap" async defer></script>


</div>


</div>

</div>
</div>
<!---------------------------------------------------------------------------------------------->










</div>
<?php get_footer();?>
