//SCALABLE HEADER
function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 1,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();

( function( window ) {

'use strict';

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

if ( typeof define === 'function' && define.amd ) {
  define( classie );
} else {
  window.classie = classie;
}

})( window );


//COLOR CHANGE HEADER ON SCROLL
$(document).ready(function(){
            var scroll_pos = 0;
            $(document).scroll(function() {
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 1) {
                    $("header").css('background-color', 'black');
                } else {
                    $("header").css('background-color', 'transparent');
                }
            });
        });


//MOBILE NAV-SLIDE
$(document).ready(function()
{
  $('#header_menu').click(function() {
    $("i", this).toggleClass("fa fa-times fa fa-bars");
    if($(this).css("margin-right") == "250px")
    {
        $('header nav').animate({"margin-right": '-=250'});
        $('#header_menu').animate({"margin-right": '-=250'});
        $('#logo').fadeIn();
    }
    else
    {
        $('header nav').animate({"margin-right": '+=250'});
        $('#header_menu').animate({"margin-right": '+=250'});
        $('#logo').fadeOut();
    }

  });
 });


//LIGHTBOX SCROLL-EFFECT - BODY SCROLL PREVENT
 $('.lightbox').on( 'mousewheel DOMMouseScroll', function (e) {
   var e0 = e.originalEvent;
   var delta = e0.wheelDelta || -e0.detail;

   this.scrollTop += ( delta < 0 ? 1 : -1 ) * 15;
   e.preventDefault();
 });

//PASSWORD visibility
$('.icon').hover(function () {
   $('#password').attr('type', 'text');
}, function () {
   $('#password').attr('type', 'password');
});


//GOOGLE MAPS KAART
function initMap() {
        var myLatLng = {lat: 52.3143699, lng: 4.9420101};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Amsterdam Arena'
        });
      }

//PREVIEW UPLOAD AFBEELDING
function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();

           reader.onload = function (e) {
               $('#preview')
                   .attr('src', e.target.result)
                   .height(150)
                   .width(auto);
           };

           reader.readAsDataURL(input.files[0]);
       }
   }






//HEADER - IMAGES SCROLL-EFFECT
 $(document).ready(function() {
   var wHeight = $(window).height();

   function parallax() {
     var pHeight = $(this).outerHeight();
     var pMiddle = pHeight / 2;
     var wMiddle = wHeight / 2;
     var fromTop = $(this).offset().top;
     var scrolled = $(window).scrollTop();
     var speed = $(this).attr('data-parallax-speed');
     var rangeA = (fromTop - wHeight);
     var rangeB = (fromTop + pHeight);
     var rangeC = (fromTop - wHeight);
     var rangeD = (pMiddle + fromTop) - (wMiddle + (wMiddle / 2));

     if (rangeA < 0) {
       rangeA = 0;
       rangeB = wHeight
     }

     var percent = (scrolled - rangeA) / (rangeB - rangeA);
     percent = percent * 100;
     percent = percent * speed;
     percent = percent.toFixed(2);

     var animFromBottom = (scrolled - rangeC) / (rangeD - rangeC);
     animFromBottom = animFromBottom.toFixed(2);

     if (animFromBottom >= 1) {
       animFromBottom = 1;
     }

     $(this).css('background-position', 'center ' + percent + '%');
     $(this).find('.parallax-content').css('opacity', animFromBottom);
     $(this).find('.parallax-content').css('transform', 'scale(' + animFromBottom + ')');
   }
   $('.parallax').each(parallax);
   $(window).scroll(function(e) {
     $('.parallax').each(parallax);
   });
 });




//IMAGE FLOAT UP & DOWN
 $.fn.moveIt = function(){
   var $window = $(window);
   var instances = [];

   $(this).each(function(){
     instances.push(new moveItItem($(this)));
   });

   window.onscroll = function(){
     var scrollTop = $window.scrollTop();
     instances.forEach(function(inst){
       inst.update(scrollTop);
     });
   }
 }

 var moveItItem = function(el){
   this.el = $(el);
   this.speed = parseInt(this.el.attr('data-scroll-speed'));
 };

 moveItItem.prototype.update = function(scrollTop){
   this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
 };

 // Initialization
 $(function(){
   $('[data-scroll-speed]').moveIt();
 });








 //SCROLL TO TOP BUTTON
 jQuery(document).ready(function($){
 	var offset = 300,
 		offset_opacity = 1200,
 		scroll_top_duration = 700,
 		$back_to_top = $('.cd-top');

 	$(window).scroll(function(){
 		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
 		if( $(this).scrollTop() > offset_opacity ) {
 			$back_to_top.addClass('cd-fade-out');
 		}
 	});

 	$back_to_top.on('click', function(event){
 		event.preventDefault();
 		$('body,html').animate({
 			scrollTop: 0 ,
 		 	}, scroll_top_duration
 		);
 	});

 });
