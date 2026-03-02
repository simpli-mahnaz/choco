//Inspiration Section

$(document).ready(function () {
  $('.ins-owl').owlCarousel({
    // loop: true,
    margin:10,
    //nav: true,
    // autoplay:true,
    // autoplayTimeout:1500,
    autoplayHoverPause:true,
    responsive: {
      0: { items: 1 },
      200:{items:2},
      300:{items:3},
      500:{items:4},
      600: { items: 4 },
      730:{items:5},
      1000: { items: 5 }
    }
  });
});



//Idea and Imagination Section

$(document).ready(function () {
  $('.idea-owl').owlCarousel({
    loop: true,
    margin:10,
    // nav: true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive: {
      0: { items: 1 },
      // 200:{items:2},
      // 300:{items:},
      // 500:{items:4},
      // 600: { items: 4 },
      // 730:{items:5},
      // 1000: { items: 1 }
    }
  });
});

//Blog Section

$(document).ready(function () {
  $('.blog-owl').owlCarousel({
    loop: true,
    margin:10,
    // nav: true,
    // autoplay:true,
    // autoplayTimeout:3000,
    // autoplayHoverPause:true,
    responsive: {
      0: { items: 1 },
      // 200:{items:2},
      // 300:{items:},
      450:{items:1.2},
       500:{items:1.3},
       600: { items:1.4 },
      //  650: { items:1.5 },
       768:{items:1.6},
       820:{items:1.8},
       868:{items:2},
      1000: { items: 3 }
    }
  });
});


//Desktop Inspiration Section
document.querySelectorAll(".desk_in_con_owl_itm").forEach(item => {

  const img = item.querySelector(".desk_in_con_owl_img");

  item.addEventListener("mouseenter", () => {
    img.src = img.dataset.hover;
  });

  item.addEventListener("mouseleave", () => {
    img.src = img.dataset.default;
  });

});

//Mobile Inspiration Section
document.querySelectorAll(".mob_in_con_owl_itm").forEach(item => {

  const img = item.querySelector(".mob_in_con_owl_img");

  item.addEventListener("mouseenter", () => {
    img.src = img.dataset.hover;
  });

  item.addEventListener("mouseleave", () => {
    img.src = img.dataset.default;
  });

});







