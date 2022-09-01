

$(function() {

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

    //portfolio-slider 
    $('.work-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            dots: false, 
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            dots: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    // to show user it's a slider, go to las slide and animate slider to first slide
    // when panel portfolio is on
    $('.work-slider').slick('slickGoTo',9);
    
    // scrollify
    $.scrollify({
      section: ".panel",
      sectionName: 'section-name',
      touchScroll: false,
      offset: -24,
      scrollSpeed: 1100,
      after: function(i) {
        $('.animated-icon2').removeClass('open');
        $('body').removeClass('has-active-menu');
        setTimeout(function(){
          $('.nav-slider').removeClass('toggling');
        }, 500);
        sidebarNavUpdate(i);
       
        console.log(i);
        if(i == 0) i = 1;
        if(i == 3) {
          var slideno = 1;
          $('.work-slider').slick('slickGoTo', 2);
        } 
      }
    }); 

    // udpate bullet list on side
    $( ".tp-bullet" ).each(function( index ) {
        $(this).click(function() {
          $.scrollify.move(index-1);
        })
      }); 
     
    // update bullet lsit on page load - check index
    let current = $.scrollify.current();
    let index = current.index();
    index = index == 0?index+=1:index;
    sidebarNavUpdate(index);

    // go to second section from home 
    $(".scroll,.scroll-btn").click(function(e) {
      e.preventDefault();
      $.scrollify.next();
    });

    // Link to contact section
    $(".scrollContact").click(function(e) {
      e.preventDefault();
      $.scrollify.move("#contact");
    });

    // main navigation links
    $('.nav-link').click(function(e) {
      e.preventDefault();
      let href = $(this).attr('href');
      $.scrollify.move('#'+href);
    });

    //up button
    const upBtn = document.getElementById("upBtnContainer");

});


function sidebarNavUpdate(i) {
  let bullets = $('.tp-bullet');
  let bullet = $('.tp-bullet:nth-child('+i+')');
  bullets.removeClass('active');
  bullet.addClass('active');
}
 

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

      