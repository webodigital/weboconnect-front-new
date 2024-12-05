document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-number");
  const speed = 100; // Animation speed
  let hasStarted = false; // Flag to check if counters have started

  const startCounting = () => {
    counters.forEach((counter) => {
      const updateCount = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;

        // Calculate the increment
        const increment = target / speed;

        // Check if we reached the target
        if (count < target) {
          // Increase the counter and update text
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 30);
        } else {
          // Set the target number if reached, adding '%' if target is 97
          counter.innerText = target === 97 ? `${target}%` : target;
        }
      };

      updateCount();
    });
  };

  const onScroll = () => {
    if (window.scrollY >= 60 && !hasStarted) {
      hasStarted = true; // Set flag to true so this only runs once
      startCounting();
      window.removeEventListener("scroll", onScroll); // Remove event listener after starting
    }
  };

  // Check the screen size
  if (window.innerWidth < 468) {
    // If screen size is less than 468px, start counting immediately
    startCounting();
  } else {
    // Otherwise, start counting on scroll
    window.addEventListener("scroll", onScroll);
  }
});

$(".what_our_clients_say_carousel").on(
  "initialized.owl.carousel changed.owl.carousel refreshed.owl.carousel",
  function () {
    $(".owl-prev").removeClass("disabled");
    $(".owl-next").removeClass("disabled");
  }
);

$(document).ready(function () {
  $(".what_our_clients_say_carousel").owlCarousel({
    items: 3,
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    autoplay: false,
    autoplayHoverPause: true, // Pauses autoplay when hovering over carousel
    navText: [
      '<i class="fas fa-arrow-left"></i>',
      '<i class="fas fa-arrow-right"></i>',
    ], // Custom text/icons for buttons
    responsive: {
      0: { items: 1 },
      600: { items: 1 },
      760: { items: 2 },
      1000: { items: 2 },
      1250: { items: 3 },
    },
  });
});

// Gallery image hover
$(".img-wrapper").hover(
  function () {
    $(this).find(".img-overlay").animate({ opacity: 1 }, 600);
  },
  function () {
    $(this).find(".img-overlay").animate({ opacity: 0 }, 600);
  }
);

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $(
  '<div id="prevButton"><i class="fa fa-chevron-left"></i></div>'
);
var $nextButton = $(
  '<div id="nextButton"><i class="fa fa-chevron-right"></i></div>'
);
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay
  .append($image)
  .prepend($prevButton)
  .append($nextButton)
  .append($exitButton);
$("#gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function (event) {
  // Prevents default behavior
  event.preventDefault();
  // Adds href attribute to variable
  var imageLocation = $(this).prev().attr("href");
  // Add the image src to $image
  $image.attr("src", imageLocation);
  // Fade in the overlay
  $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function () {
  // Fade out the overlay
  $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function (event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  // All of the images in the gallery
  var $images = $("#image-gallery img");
  // If there is a next image
  if ($nextImg.length > 0) {
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    // Otherwise fade in the first image
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function (event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  // Fade in the next image
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function () {
  // Fade out the overlay
  $("#overlay").fadeOut("slow");
});



$(document).ready(function () {
  $('.testimonial_video_slider').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    navText: ["<i class='bi bi-arrow-left'></i>","<i class='bi bi-arrow-right'></i>"],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:2,
            nav:true,
            loop:false
        }
    }
  });

  $('.mob_app_portfolio_slider').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    navText: ["<i class='bi bi-arrow-left'></i>","<i class='bi bi-arrow-right'></i>"],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
  });

  
  $('.case_study_mob_slider').owlCarousel({
    loop:true,
    nav:false,
    loop:true,
    margin:30,
    responsiveClass:true,
    navText: ["<i class='bi bi-arrow-left'></i>","<i class='bi bi-arrow-right'></i>"],
    responsive:{
        0:{
            items:1,
        },
        500:{
            items:2,
        },
        700:{
            items:3,
        },
        1000:{
            items:5,
        }
    }
  });
  

  $('.MV_portfolio_web_carousel').owlCarousel({
    loop:true,
    nav:false,
    loop:true,
    margin:30,
    responsiveClass:true,
    navText: ["<i class='bi bi-arrow-left'></i>","<i class='bi bi-arrow-right'></i>"],
    responsive:{
        0:{
            items:2,
        },
        500:{
            items:2,
        },
        700:{
            items:3,
        },
    }
  });
  $('.MV_portfolio_mobile_carousel').owlCarousel({
    loop:true,
    nav:false,
    loop:true,
    margin:30,
    responsiveClass:true,
    navText: ["<i class='bi bi-arrow-left'></i>","<i class='bi bi-arrow-right'></i>"],
    responsive:{
        0:{
            items:2,
        },
        500:{
            items:2,
        },
        700:{
            items:3,
        },
    }
  });
  

  $('.testimonials_slider').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    dots: true,
    items:1,
  });


  var owl = $('.our_story_slider');
    owl.owlCarousel({
      loop:true,
      margin:30,
      nav:false,
      dots: true,
      items:1,
  });
  
  // owl.on('mousewheel', '.owl-stage', function (e) {
  //     if (e.deltaY>0) {
  //         owl.trigger('next.owl');
  //     } else {
  //         owl.trigger('prev.owl');
  //     }
  //     e.preventDefault();
  // });



  
  $('.trusted_top_companies_slider').owlCarousel({
    loop:true,
    nav:false,
    dots:false,
    loop:true,
    margin:30,
    responsiveClass:true,
    navText: ["<i class='bi bi-arrow-left'></i>","<i class='bi bi-arrow-right'></i>"],
    responsive:{
        0:{
            items:3,
            margin:10,
        },
        500:{
            items:3,
            margin:20,
        },
        700:{
            items:5,
            margin:30,
        },
        1000:{
            items:7,
            margin:30,
        }
    }
  });


});