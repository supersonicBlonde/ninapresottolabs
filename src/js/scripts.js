

$(function() {

  if($('.work-slider')) {

    const $slick_slider = $('.work-slider');
    const settings = {
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
    }
  
    // reslick only if it's not slick()
    $(window).on('resize', function() {
      if ($(window).width() > 480) {
        console.log(768);
        if ($slick_slider.hasClass('slick-initialized')) {
          $slick_slider.slick('unslick');
        }
        return
      }

      if (!$slick_slider.hasClass('slick-initialized')) {
        return $slick_slider.slick(settings);
      }
    });
  }


    $('.third-button').on('click', function () {
      $('.animated-icon3').toggleClass('open');
    });

     
    let height_ar = [];

    //sliding mobile menu
    function close() {
      $('.animated-icon2').removeClass('open');
      $('body').removeClass('has-active-menu');
      setTimeout(function(){
        $('.nav-slider').removeClass('toggling');
      }, 500);
    }
    
    function open() {
      $('body').addClass('has-active-menu');
      $('.nav-slider').addClass('toggling');
      $('.animated-icon2').addClass('open');
    }
    
    $('.nav-mask').click(close);
    $('.nav-slider.toggling').click(close);
    $('.navbar-toggler').click(open);

    //up button
    const upBtn = document.getElementById("upBtnContainer");

});


// When the user scrolls down 20px from the top of the document, show the button
//sticky header whit scrollify has to be solved
window.onscroll = function() {scrollFunction()};

function scrollFunction() { 

  /* const upBtn = document.getElementById("upBtnContainer");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    console.log('scroll');
      upBtn.classList.add("show");
  } else {
    upBtn.classList.remove("show");
  } */
  // Get the header
  var header = document.querySelector(".header");
  
  // Get the offset position of the navbar
  var sticky = header.offsetTop + 100;

  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    $('.navbar-brand span:last-child').fadeOut();
  } else {
    header.classList.remove("sticky");
    $('.navbar-brand span:last-child').fadeIn();
  }   
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

      