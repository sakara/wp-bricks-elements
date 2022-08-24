var $ = jQuery;
function pazlab_slider_script() {


      var swiper = new Swiper(".bricks-swiper-container", {
        loop: true,
        grabCursor: true,
        pagination: {
          el: ".swiper-pagination",
          paginationVar: paginationValue,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

}

$(function() { bricksIsFrontend && pazlab_slider_script(); })

      