jQuery( document ).ready( function( $ ) {


function heightDetect() {
  $("#header").css("height", $(window).height());
};
heightDetect();
$(window).resize(function() {
  heightDetect();
});

//Smooth scrolling to id
$('.onepage-link').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 800, 'swing', function () {
          window.location.hash = target;
      });
  });

//Accordion for FAQ
$("#accordion h4").click(function(){
 // $(this).toggleClass("up");

    //slide up all the link lists
   // $("#accordion .answer").slideDown();
    $("#accordion .answer").slideUp(function() {
      $(this).prev().removeClass("up").addClass("down");
      });

    if(!$(this).next().is(":visible"))
    {
      $(this).next().slideDown(function() {
      $(this).prev().removeClass("down").addClass("up");
      });
      }

  })
//

//Animation
$('h1').animated("fadeInDown", "fadeOutUp");
$('.header-descr').animated("fadeInUp","fadeOutDown");
$('h2, .price-div').animated("fadeInUp","fadeOutDown");
$('.icon, .rev-pic, .opp-icon, .photo').animated("flipInY","flipOutY");
$('.faq-item').animated("fadeInLeft","fadeOutRight");
$('section h3').animated("flipInX","flipOutX");
$('.icon-div>p, .price-div, .fade-text, #footer, .footer-nav').animated("fadeIn","fadeOut");
$('.left, .left2 div').animated("fadeInLeft","fadeOutLeft");
$('.right , #wpcf7-f35-o1 .form-control').animated("fadeInRight","fadeOutRight");
$('.order-btn').animated("bounceIn","bounceOut");

//Automatically close menu after scrolling to target
$(document).on('click','.navbar-collapse.in',function(e) {

    if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
        $(this).collapse('hide');
    }

});

//Calculator
 function calc() {

    var appsAmount = $(".result").html();
    var appPrice = $(".result2").html();
    var monthlyFee = $(".result3").html();


    var costs = 590;

    var profit = appsAmount * appPrice +  appsAmount * monthlyFee - costs;
    $("#profitBox").html(profit);


   }

  $(document).ready(function(){
     var appsAmount = $(".result").html();
    var appPrice = $(".result2").html();
    var monthlyFee = $(".result3").html();


    var val1 = 3;
    var val2 = 35000;
    var val3 = 1000;

     $('.result').html(val1);
     $('.result2').html(val2);
     $('.result3').html(val3);
     calc();

     $( "#slider" ).slider({
      animate: true,
      range:"min",
      value:val1,
      min:1,
      max:50,
      step:1,
      slide: function(event, ui) {
          $('.result').html(ui.value);
          calc();
      }
    } );


     $( "#slider-price" ).slider({
      animate: true,
      value: val2,
      min:25000,
      range:"min",
      max:200000,
      step:1000,
      slide: function(event, ui) {
          $('.result2').html(ui.value);
          calc();
      }
    } );

 $( "#slider-monthly" ).slider({
      animate: true,
      value: val3,
      range:"min",
      min:500,
      max:20000,
      step:100,
      slide: function(event, ui) {
          $('.result3').html(ui.value);
          calc();
      }
    } );
//Ads slider

var adApps = 5;
var adAmount = 10;
var adPrice = 1000;
var costs = 590;

$(".ad-apps-res").html(adApps);
$(".ad-amount-res").html(adAmount);
$(".ad-price-res").html(adPrice);



function adcalc() {
var adAppsDynamic = $(".ad-apps-res").html();
var adAmountDynamic = $(".ad-amount-res").html();
var adPriceDynamic = $(".ad-price-res").html();
var adProfit = adAppsDynamic * adAmountDynamic * adPriceDynamic - costs;
    $("#adProfitbox").html(adProfit);

}
adcalc();
 $( "#ad-apps" ).slider({
      animate: true,
      range:"min",
      value:adApps,
      min:1,
      max:50,
      step:1,
      slide: function(event, ui) {
          $('.ad-apps-res').html(ui.value);
          adcalc();
      }
    } );


     $( "#ad-amount" ).slider({
      animate: true,
      value: adAmount,
      min:1,
      range:"min",
      max:100,
      step:1,
      slide: function(event, ui) {
          $('.ad-amount-res').html(ui.value);
          adcalc();
      }
    } );

 $( "#ad-price" ).slider({
      animate: true,
      value: adPrice,
      range:"min",
      min:500,
      max:10000,
      step:100,
      slide: function(event, ui) {
          $('.ad-price-res').html(ui.value);
          adcalc();
      }
    } );



});

//Knob
$('#facts').waypoint(function() {
    $('.dia').each(function() {
      var element = $(this);
      var perc = element.attr("value");

     $(".dial").knob({
 "fgColor": "#c8385e",
 "thickness": 0.10,
 "readOnly":true,
 "format" : function (value) {
      return value + '%';
   }
   });

       $(".dial2").knob({
 "fgColor": "#c8385e",
 "thickness": 0.10,
 "max": 100,
 "step": 1,
 "readOnly":true,
 "format" : function (value) {
      return value + '%';
}

         });
       $(".dial3").knob({
 "fgColor": "#c8385e",
 "thickness": 0.10,
 "max": 350,
 "step": 0.1,
 "readOnly":true
         });
       $(".dial4").knob({
 "fgColor": "#c8385e",
 "thickness": 0.10,
 "max": 35,
 "step": 0.1,
 "readOnly":true
         });

      $({value: 0}).animate({value: perc}, {
        duration: 3000,
        easing: 'swing',
        step: function() {
          element.val(this.value).trigger('change');
        }
      });
    });
  //this.destroy();
  },{offset: '80%', triggerOnce: true });


//
//
//  $(function() {

//         $(".dial").knob({
// "fgColor": "#c8385e",
// "thickness": 0.15,
// "max": 100,
// "step": 1,
// "readOnly":true,
// "format" : function (value) {
//      return value + '%';
//   }


//         });
//          $('.facts').waypoint(function(direction) {
//          $({value:0}).animate({
//                             value: 89
//                         },{
//                             duration: 4950,
//                             easing: 'swing',
//                             progress: function () {
//                                 $('.dial').val(Math.round(this.value)).trigger('change');
//                             } // progress:function
//                         });
//     });




// $(function() {
//         $(".dial2").knob({
// "fgColor": "#c8385e",
// "thickness": 0.15,
// "max": 100,
// "step": 1,
// "readOnly":true,
// "format" : function (value) {
//      return value + '%';
// }

//         });
//     });
// $(function() {
//         $(".dial3").knob({
// "fgColor": "#c8385e",
// "thickness": 0.15,
// "max": 500,
// "step": 0.1
//         });
//     });$(function() {
//         $(".dial4").knob({
// "fgColor": "#c8385e",
// "thickness": 0.15,
// "max": 100,
// "step": 1,
// "readOnly":true
//         });
//     });
// });  //end of knob
//Popup webinar
//setTimeout(function() {
      //alert('What\'s up?');
//$('#discountModal').modal();
//}, 15000);

//Popup subscription
//setTimeout(function() {
//$('#subscriptionModal').modal();
//}, 20000);


 });//End of document.ready..


