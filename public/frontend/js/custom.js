
    // ------------------------------------------------------- //
    // Scroll Top Button
    // ------------------------------------------------------- //
//    $('#scrollTop').on('click', function () {
//        $('html, body').animate({ scrollTop: 0}, 1000);
//    });

    var c, currentScrollTop = 0,
        navbar = $('.header-wrapper');
    $(window).on('scroll', function () {

        // Navbar functionality
        var a = $(window).scrollTop(), b = navbar.height();

        currentScrollTop = a;
        if (c < currentScrollTop && a > b + b) {
            navbar.addClass("scrollUp");
        } else if (c > currentScrollTop && !(a <= b)) {
            navbar.removeClass("scrollUp");
        }
        c = currentScrollTop;


        
    });





 // ------------------------------------------------------- //
    // flexslider start
    // ------------------------------------------------------- //
 $(document).ready(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 555,
    itemMargin: 2
  });
});


 // ------------------------------------------------------- //
    // flexslider end
    // ------------------------------------------------------- //





 // ------------------------------------------------------- //
    // footer start
    // ------------------------------------------------------- //
function showSubMenu(value){
	if($(window).width() <= 767){
	 		
		//$("#myCarousel").removeClass("carousel");
		if($( ".showSubmenu"+value ).is(":hidden")){
	     	$( ".showSubmenu"+value ).show();
	     	$("#footer"+value+"Links").html($("#footer"+value+"Links").text()+'<i class="fa fa-angle-up" aria-hidden="true" style="float:right;"></i>');
	     } else {
	     	$( ".showSubmenu"+value ).hide();
	     	$("#footer"+value+"Links").html($("#footer"+value+"Links").text()+'<i class="fa fa-angle-down" aria-hidden="true" style="float:right;"></i>');
	     }
	}
}
function windowSize(){
	
if($(window).width() <= 767){
		$("#footer1Links").html($("#footer1Links").text()+'<i class="fa fa-angle-down" aria-hidden="true" style="float:right;"></i>');
		$("#footer1Links").parent().addClass('pad-r30');
		$("#footer2Links").html($("#footer2Links").text()+'<i class="fa fa-angle-down" aria-hidden="true" style="float:right;"></i>');
		$("#footer3Links").html($("#footer3Links").text()+'<i class="fa fa-angle-down" aria-hidden="true" style="float:right;"></i>');
	    $("#footer4Links").html($("#footer4Links").text()+'<i class="fa fa-angle-down" aria-hidden="true" style="float:right;"></i>');
	}
	windowSize();
}

// ------------------------------------------------------- //
    // footer end
    // ------------------------------------------------------- //




// ========Limit number of characters in div  =========//
$("div, p , h6").each(function() {
	var textMaxChar = $(this).attr('data-max-characters');

	length = $(this).text().length;
	if(length > textMaxChar) {
		$(this).text($(this).text().substr(0, textMaxChar) + '...');
	}
});
// ======== END Limit number of characters in div  =========//


// ========wishlist start  =========//


$('.wishlist-icon').click(function() {
    $(this).toggleClass('fa fa-heart');
    $(this).toggleClass('fa fa-heart-o text-danger');
});


// ========wishlist end  =========//