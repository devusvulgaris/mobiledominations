jQuery( document ).ready( function( $ ) {


//Back to top button
$(window).scroll(function() {
        if ($(this).scrollTop() > 250) {
            $('.back-to-top').fadeIn(300);
        } else {
            $('.back-to-top').fadeOut(300);
        }
    });

    $('.back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
        return false;
    })

//Tabs in comment area
$(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

 });
// Load function
jQuery(window).load(function() {
  jQuery(".loader-inner").fadeOut();
  jQuery(".loader").delay(400).fadeOut("slow");
});
