
$(document).ready(function() {





	$(window).on('load', function() { 
		$('#status').fadeOut(); 
		$('#preloader').delay(350).fadeOut('slow'); 
		$('body').delay(350).css({'overflow':'visible'});
	})





	$(".fancybox").fancybox({});
	//	$(".MapAreaImage area.active").mouseenter('12312312');
 
	$(window).load(function() {
		$(".Language").removeClass("wow fadeIn animated").removeAttr("style");     
		$(".HeaderTextParent .Text").removeClass("wow slideInDown animated").removeAttr("style");     
		
		
		
		
	}); 
	
	//$('.MapInside').imagesLoaded().always( function( instance ) {
		//$('img[usemap]').rwdImageMaps().delay(1000);
	//});


	
	

    new WOW().init();

	
     $(".ShowHideMenu").click(function(){
        $("body").toggleClass("BodyShadow"); 
        $("#BellevueMenu").toggleClass("MenuRightShow"); 
     });

	
 	//Pace.on('done', function () {
		//$('#preloader').hide();
		// setTimeout(function(){ 
		// 	$("head").append("<link rel='stylesheet' href='css/effects.css' type='text/css' media='all'>");
		// }, 1000);
	//});

	
	
	// Home Page { 
		$('#BellevuePages').fullpage({
			anchors: ['Home','AboutUs', 'LuxuryLiving', 'News'],
			
			sectionsColor: ['#ffffff', '#f8f5f0'],
			menu: '#menu', 
			controlArrows: false, 
            responsiveWidth: 990,  
			slidesNavigation: true,
			//lockAnchors:true,
		 
			// afterLoad: function(anchorLink, index){
			// 	if( index === 1 ){
			// 		$('#HomeFirstPageDiv').addClass('slideInUp');
			// 		//$('#HomeFirstPageDiv').addClass('fadeInDown3');		
			// 	}
			// },

			onLeave: function(index, nextIndex, direction) {   
				
				if( index == 1 && nextIndex == 2 ) { 
					
					$(".Logo").removeClass("slideInDown wow");   
					$(".HeaderTextParent .Text").removeClass("slideInDown wow");   
					$(".Language").removeClass("fadeIn wow");   

					$('.HomeFirstDiv').removeClass('animated slideInUp').removeAttr( 'style' );
					$('.HomeFirstDiv').addClass('fadeInDown3');
							
				}

				if( index == 2 && nextIndex == 1 ) { 	
					
					$(".HeaderDiv").removeClass("ChangeHeader");   
					$("#BellevueMenu").removeClass("ChangeMenu"); 
					$(".HeaderDiv").removeClass("SmallHeader");
 	
					$('.HomeFirstDiv').removeClass('animated fadeInDown3').removeAttr( 'style' );
					$('.HomeFirstDiv').addClass('slideInUp');
				}




				if( index == 1 && nextIndex == 2 ) { 
					if (document.documentElement.clientWidth > 992) { new WOW().init();	}	
					$(".HeaderDiv").addClass("ChangeHeader");   
					$("#BellevueMenu").addClass("ChangeMenu"); 
					$(".HeaderDiv").addClass("SmallHeader");
 
					$(".LogoDivParent").removeClass("animated slideInDown").removeAttr('style');    

					$(".HomePage2 .TitleDiv").addClass("HeightAuto1"); 		 				
					$('.Home2RightInfo .Text').addClass('HeightAuto2');

					$('.ImageSlideUp1').removeClass('animated slideInDownSmall').removeAttr( 'style' );
					$('.ImageSlideUp1').addClass('slideInUp2');					

					$('.TextUpDown').removeClass('animated fadeInDown2').removeAttr( 'style' );
					$('.TextUpDown').addClass('fadeInUp2'); 
				}	


				if( index == 2 && nextIndex == 1 ) { 
					if (document.documentElement.clientWidth > 992) { new WOW().init();	}
					
					$(".LogoDivParent").addClass("slideInDown").removeAttr('style');    

					$(".HomePage2 .TitleDiv").removeClass("HeightAuto1"); 		 				
					$('.Home2RightInfo .Text').removeClass('HeightAuto2');	


					$('.ImageSlideUp1').removeClass('animated slideInUp2').removeAttr( 'style' );
					$('.ImageSlideUp1').addClass('slideInDownSmall');
 
				 	$('.TextUpDown').removeClass('animated fadeInUp2').removeAttr( 'style' );
					$('.TextUpDown').addClass('fadeInDown2');
				}


				if( index == 2 && nextIndex == 3 ) { 
					if (document.documentElement.clientWidth > 992) { new WOW().init();	}
					$(".HomePage2 .TitleDiv").removeClass("HeightAuto1"); 		 				
					$('.Home2RightInfo .Text').removeClass('HeightAuto2');	
					
					
					$('.ImageSlideUp1').removeClass('animated slideInUp2').removeAttr( 'style' );
					$('.ImageSlideUp1').addClass('fadeInDown2');


					$('.TextUpDown').removeClass('animated fadeInUp2').removeAttr( 'style' );
					$('.TextUpDown').addClass('fadeInDown2');


					$('.ImageSlideUp2').removeClass('animated fadeInDown2').removeAttr( 'style' );
					$('.ImageSlideUp2').addClass('slideInUp2');
				}	




				if( index == 3 && nextIndex == 2 ) { 
					if (document.documentElement.clientWidth > 992) { new WOW().init();	}
				 	$(".HomePage2 .TitleDiv").addClass("HeightAuto1"); 		 				
					$('.Home2RightInfo .Text').addClass('HeightAuto2');	


					$('.ImageSlideUp1').removeClass('animated fadeInDown2').removeAttr( 'style' );
					$('.ImageSlideUp1').addClass('slideInUp2');


					$('.TextUpDown').removeClass('animated fadeInDown2').removeAttr( 'style' );
					$('.TextUpDown').addClass('fadeInUp2');

					$('.ImageSlideUp2').removeClass('animated slideInUp2').removeAttr( 'style' );
					$('.ImageSlideUp2').addClass('fadeInDown2');
				}
 
			  
			}


 
			
			 
		}); 
 


 
	
	
	
	
	$('.TextAndImageSlide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: false,
		asNavFor: '.BellAccordionContent',
		dots: false,
		arrows:false,
		focusOnSelect: true,		
		fade: true,
		cssEase: 'linear'
	});
	$('.BellAccordionContent').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.TextAndImageSlide',
		dots: false,
		arrows:false,
		centerMode: false,
		focusOnSelect: true,
	});
		
	
	
	
 


    $('.HomeFirstDiv').slick({
        //infinite: true,
       // dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        //arrows: false,
		autoplay: true,
		autoplaySpeed: 3000,
        dots: true,
        appendDots: $('.HomeSlideControl .Numbers'),
        prevArrow: $('.HomeSliderArrows .leftArrow'),
        nextArrow: $('.HomeSliderArrows .RightArrow'),
        speed: 1000
    });


    $('.HomeNewsSlide').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        appendDots: $('.HomeNewsControl .Numbers'),
        prevArrow: $('.HomeNewsControl .leftArrow'),
        nextArrow: $('.HomeNewsControl .RightArrow'),
        speed: 1000,
        responsive: [
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });



    $('.RoomsHomeSlide .row').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
		autoplay: true,
		autoplaySpeed: 3000,
        dots: true,
        appendDots: $('.RoomSlideControl .Numbers'),
        prevArrow: $('.RoomSlideControl .leftArrow'),
        nextArrow: $('.RoomSlideControl .RightArrow'),
        speed: 1000,
        focusOnSelect: false,
        responsive: [
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });



    

    $('.BigImageSLider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.SlideThumbnail'
    });
    $('.SlideThumbnail').slick({
        slidesToShow: 3,
        slidesToScroll: 1,  
        focusOnSelect: true,
        asNavFor: '.BigImageSLider',   
        prevArrow: $('.FloorSliderDiv .leftArrow'),
        nextArrow: $('.FloorSliderDiv .RightArrow'), 
        responsive: [
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
              }
            }
          ]  
    });
    


    // $(document).ready(function () {

    // $("#HomeFirstPageDiv").height($(document.body).height());

    // });

	
 
	$('.map').maphilight({ 
		fillColor: 'eeb552',
		fill: true, 
		fillOpacity: 0.85,
		//stroke: true,
		strokeColor: 'eeb552',
		strokeOpacity: 1, 
	});
	 
		
	 
	$('.MapInside').maphilight({ 
		fillColor: 'eeb552',
		fill: true, 
		fillOpacity: 0.85,
		//stroke: true,
		strokeColor: 'eeb552',
		strokeOpacity: 1, 
		//alwaysOn: true
		
		
	});

	
$(window).load(function() {
	
	$('.FloorMapArea area.active').mouseover();
	
	/*
	$(this).data('maphilight', { 
          alwaysOn: true 
    }).trigger('alwaysOn.maphilight');
    //check if area wasnt already selected - otherwise gets buggy
    if( !$(this).hasClass('selected') ){ 
      $('.selected').data('maphilight', {
          alwaysOn: false
      }).trigger('alwaysOn.maphilight');
      $('#map-tag area').removeClass('selected');
      $(this).addClass('selected');
    }
	*/

	
	
}); 
      
$(document).on({

    mouseover:function(event){
		var th = $(this);
		if(th.is('area')){
			$floor = th.attr("flor");       
			$(".FloorInfoWindow > div").addClass("hidden");
			$($floor).removeClass("hidden");  

			$stageRightDiv = th.attr("stage");       
			$("#StageRightDivID li").removeClass("active");
			$($stageRightDiv).addClass("active");  
			
			
			$FloorInfoList = th.attr("apartament");       
			$("#FloorInfoList .Item").removeClass("active");
			$($FloorInfoList).addClass("active");  

		}else{
			var elem = $('.MapAreaImage area[stage="#'+th.attr('id')+'"]');
			elem.mouseover();
			
			var eleme = $('.FloorMapArea area[apartament="#'+th.attr('id')+'"]');
			eleme.mouseover();			
		}	

						
    },

    mouseout:function(event){
		var th = $(this);
		if(th.is('area')){
			$(".FloorInfoWindow > div").addClass("hidden"); 
			$("#StageRightDivID li").removeClass("active");
			$("#FloorInfoList .Item").removeClass("active");
		}else{
			var elem = $('.MapAreaImage area[stage="#'+th.attr('id')+'"]');
			elem.mouseout();
			
			var eleme = $('.FloorMapArea area[apartament="#'+th.attr('id')+'"]');
			eleme.mouseout();
		}
		//console.log("mouseleave")
		//$('.FloorMapArea area.active').mouseover();
	}  

},'#MapAreaImageID area,#StageRightDivID li, #FloorInfoList .Item, #FloorMapArea area');  

 
 
 
 
 
 
 
 $(document).on({

   
    mouseout:function(event){
		 
		//console.log("mouseleave")
		$('.FloorMapArea area.active').mouseover();
	}  

},'.FloorMapArea '); 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
$('#InsideMenu').onePageNav();
$('#InsideMenu2').onePageNav();


$('#SelectOnChangeValue select').on('change', function () {
   $('body, html').animate({ scrollTop: $('#' + $(this).val()).position().top });
});


 

 
$('.masterTooltip').hover(function(){
		// Hover over code
		var title = $(this).attr('title');
		$(this).data('tipText', title).removeAttr('title');
		$('<p class="tooltip"></p>')
		.text(title)
		.appendTo('.FloorMapArea')
		.show();
}, function() {
		// Hover out code
		$(this).attr('title', $(this).data('tipText'));
		$('.tooltip').remove();
}).mousemove(function(e) {
		var mousex = e.pageX + 20; //Get X coordinates
		var mousey = e.pageY - 5; //Get Y coordinates
		$('.tooltip')
		.css({ top: mousey, left: mousex })
});
 	









$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		var links = this.el.find('.TItle');
		links.on('click', {
				el: this.el,
				multiple: this.multiple
		}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
		$this = $(this),
				$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
				$el.find('.MoreText').not($next).slideUp().parent().removeClass('open');
		};
	}
	var accordion = new Accordion($('.BellAccordionContent'), false);
});


if (document.documentElement.clientWidth < 900) {

    $(function(){
        var windowH = $('body').height();
        var wrapperH = $('.Height100').height();
        if(windowH > wrapperH) {                            
            $('.Height100').css({'height':($(window).height())+'px'});
        }                                                                               
        $(window).resize(function(){
            var windowH = $(window).height();
            var wrapperH = $('.Height100').height();
            var differenceH = windowH - wrapperH;
            var newH = wrapperH + differenceH;
            var truecontentH = $('.Height100').height();
            if(windowH > truecontentH) {
                $('.Height100').css('height', (newH)+'px');
            }

        })          
    });

}



});


$(document).on("click", ".g-submit-button", function(){
	let firstname = $(".g-firstname").val();
	let phone = $(".g-phone").val();
	let hash = $(".g-hash").val();
	$(".g-message-text").html('...');

	if(
		typeof firstname !== "undefined" && 
		typeof phone !== "undefined" 
	){
		$.ajax({
	        type: "POST",
	        url: Config.website+input_lang+"/?ajax=true",
	        data: { 
	            type:"sendemail",  
	            firstname:firstname,                  
	            phone:phone,          
	            hash:hash          
	        } 
	    }).done(function( msg ) {
	        var obj = $.parseJSON(msg);
	        if(obj.Error.Code==1){            
	            $(".g-message-text").html(obj.Error.Text);
	        }else{
	            $(".g-message-text").html(obj.Success.Html);
	        }
	    });
	}else{
		$(".g-message-text").html('Error');
	}
});
 

 