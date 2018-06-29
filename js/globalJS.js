

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();


  $(".navbar a, footer a[href='#myPage'],a").on('click', function(event) {


    if (this.hash !== "") {


      event.preventDefault();

      // Store hash
      var hash = this.hash;


      $('html, body').animate({
        scrollTop: $(hash).offset().top - 80
      }, 500, function(){


        window.location.hash = hash;
      });
    }
  });


// body padding
$('.front-page , .premlink').css('paddingTop',$('.navbar').innerHeight());





  $( window ).load(function() {
  $("body").css("overflow","auto");
  $(".loading").fadeOut(1000);
   });




$('#myCarousel2').carousel({
        interval: 3000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });


    var highestBox = 0;
        $('.equalizer').each(function(){
                if($(this).height() > highestBox){
                highestBox = $(this).height()+15;
        }
    });
    $('.equalizer').height(highestBox);



$(window).scroll(function(){
if($(document).scrollTop()>100){
$('.contact-header').addClass('shrink');
}else{
$('.contact-header').removeClass('shrink');
}
});


$('.cats-name li').click(function(){
  var index=$(this).index();
  alert(index);
});


});
