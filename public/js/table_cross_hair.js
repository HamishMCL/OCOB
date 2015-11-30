$(document).ready(function(){



$('.matches').hover(function(){
    $(this).toggleClass('focus');
    $('.matches').each(function(){
         $(this).toggleClass("test");
    });
    

});



$('.innings').hover(function(){
    $(this).toggleClass('focus');
    $('.innings').each(function(){
         $(this).toggleClass("test");
    });
    

});
$('.no').hover(function(){
    $(this).toggleClass('focus');
    $('.no').each(function(){
         $(this).toggleClass("test");
    });
    

});
$('.average').hover(function(){
    $(this).toggleClass('focus');
    $('.average').each(function(){
         $(this).toggleClass("test");
    });
    

});
$('.runs').hover(function(){
    $(this).toggleClass('focus');
    $('.runs').each(function(){
         $(this).toggleClass("test");
    });
    

});
$('.highest_score').hover(function(){
    $(this).toggleClass('focus');
    $('.highest_score').each(function(){
         $(this).toggleClass("test");
    });
    

});
$('.hunds').hover(function(){
    $(this).toggleClass('focus');
    
    $('.hunds').each(function(){
         $(this).toggleClass("test");
    });
    

});

$('.fiftys').hover(function(){
    $(this).toggleClass('focus');
    
    $('.fiftys').each(function(){
         $(this).toggleClass("test");
    });
    

});
$('.ducks').hover(function(){
    $(this).toggleClass('focus');

    $('.ducks').each(function(){
         $(this).toggleClass("test");
    });
    

});
$('.fours').hover(function(){
    $(this).toggleClass('focus');

    $('.fours').each(function(){
         $(this).toggleClass("test");
    });
    

});
$('.sixs').hover(function(){
    $(this).toggleClass('focus');

    $('.sixs').each(function(){
         $(this).toggleClass("test");
    });
    

});
$('.outs').hover(function(){
    $(this).toggleClass('focus');

    $('.outs').each(function(){
         $(this).toggleClass("test");
    });
    

});

  $('.most_sixes').on("mouseover", function() {
          $(this).css("background-color","#E6E3E3");

    });

   $('.most_sixes').on("mouseout", function() {
          $(this).css("background-color","white");

    });

});