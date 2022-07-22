

$(function() {
  $.scrollify({
    section: ".panel",
    sectionName: 'section-name',
    interstitialSection: 'header',
    scrollSpeed: 1100,
    after: function(i) {
      sidebarNavUpdate(i);
    }
  });

  $(".scroll,.scroll-btn").click(function(e) {
    e.preventDefault();

    $.scrollify.next();
  });

  $(".scrollContact").click(function(e) {
    e.preventDefault();

    $.scrollify.move("#contact");
  });

  $('.nav-link').click(function(e) {
    e.preventDefault();
    let href = $(this).attr('href');
    $.scrollify.move('#'+href);
  });

  //Get the button:
  const upBtn = document.getElementById("upBtnContainer");

});


function sidebarNavUpdate(i) {
  let bullets = $('.tp-bullet');
  let bullet = $('.tp-bullet:nth-child('+i+')');
  bullets.removeClass('active');
  bullet.addClass('active');
}


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() { 
  const upBtn = document.getElementById("upBtnContainer");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      upBtn.classList.add("show");
  } else {
    upBtn.classList.remove("show");
  }
  // Get the header
  var header = document.querySelector(".header");
  // Get the offset position of the navbar
  var sticky = header.offsetTop + 100;

  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

      