$(function() {
  $.scrollify({
    section: ".panel",
    //sectionName:false,
    scrollSpeed: 1100,
    after: function(i) {
      /*
			if(i===2) {
				$.scrollify.setOptions({
					easing:"easeOutExpo"
				});
			}*/
    }
  });

  $(".scroll,.scroll-btn").click(function(e) {
    e.preventDefault();

    $.scrollify.next();
  });

  $(".scrollContact").click(function(e) {
    e.preventDefault();

    $.scrollify.move("#4");
  });

  //Get the button:
  const upBtn = document.getElementById("upBtnContainer");

});



// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() { 
  const upBtn = document.getElementById("upBtnContainer");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      upBtn.classList.add("show");
  } else {
    upBtn.classList.remove("show");
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

      