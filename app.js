$(document).ready(function(){       
 var scroll_start = 0;
 var startchange = $('#startchange');
 var offset = startchange.offset();
   $(document).scroll(function() { 
    scroll_start = $(this).scrollTop();
    if(scroll_start > offset.top) {
      $(".navbar").addClass("navbar-default");
      $(".navbar").removeClass("pt-5");
    } else {
      $('.navbar').removeClass("navbar-default");
    }
  });
});

$(document).ready(function(){
  $('.portfolio_box').hover(
    function() {
      $(this).find('.overlay').animate({bottom: '-20%'}, 'fast' );
      console.log("Toto");
    },function() {
      $(this).find('.overlay').animate({bottom: '-75%'}, 'fast' );
    }
  );
});