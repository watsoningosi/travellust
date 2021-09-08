/*!
 * Albery
 * by Albert Mendes
 *
 * Copyright 2018 Albert Mendes
 * Released under the MIT license
 * https://github.com/albertmendes/Albery/blob/master/LICENSE
 *
 * @preserve
 */

(function ($) {

  $.fn.albery = function(options) {
    var settings = $.extend({
      speed: 500,
      imgWidth: "600",
      paginationBorder: 5,
      paginationItemWidth: 116,
    }, options);


    /* Fit to screen */
    function checkIfFits() {
      if(window.innerWidth < settings.imgWidth) {
        settings.imgWidth = window.innerWidth - 42;
      }
    }
    checkIfFits();
    /***************************/

    var childrenImg = $(".albery-wrapper div").length;
    var maxLength = childrenImg * settings.imgWidth;
    var myleft = 0;
    var myleftPagination = 0;
    $(".pagination-item").css("width", settings.paginationItemWidth);
    $(".pagination-item").css("marginRight", settings.paginationBorder);
    var allPagination = (settings.paginationItemWidth + settings.paginationBorder) * childrenImg;
    var onePagination = settings.paginationItemWidth + settings.paginationBorder;

    $(".albery-container, .albery-item, .pagination-container").css("width", settings.imgWidth);

    $(".albery-wrapper").css("width", maxLength);
    $(".pagination-wrapper").css("width", ((settings.paginationItemWidth + settings.paginationBorder) * childrenImg));

    function moveNext() {
      // Move left
      myleft -= settings.imgWidth;
      myleftPagination -= onePagination;
      if(myleft <= -maxLength) {
        $(".albery-wrapper").animate({left: 0}, settings.speed);
        $(".pagination-wrapper").animate({left: 0}, settings.speed);
        // Reset
        myleft = 0;
        myleftPagination = 0;
        console.log(myleft);
      }
      else {
        $(".albery-wrapper").animate({left: myleft}, settings.speed);
        $(".pagination-wrapper").animate({left: myleftPagination}, settings.speed);
        console.log(myleft);
      }
    }

    function movePrev() {
      if(myleft == 0) {
        $(".albery-wrapper").animate({left: -maxLength + settings.imgWidth}, settings.speed);
        $(".pagination-wrapper").animate({left: -allPagination + onePagination}, settings.speed);
        // Reset
        myleft = -maxLength + settings.imgWidth;
        myleftPagination = -allPagination + onePagination;
        console.log(myleft);
      }
      else {
        // Move right
        myleft += settings.imgWidth;
        myleftPagination += onePagination;
        $(".albery-wrapper").animate({left: myleft}, settings.speed);
        $(".pagination-wrapper").animate({left: myleftPagination}, settings.speed);
        console.log(myleft);
      }
    }

    /* Pagination */

    $(".pagination-item").on("click", function() {
      var itemNum = this.dataset.item;
      myleft = -(settings.imgWidth * (itemNum));
      myleftPagination = -(onePagination * itemNum);
      movePrev();
      console.log(itemNum);
    });

    $("#rightArrow").on("click", function(e) {
      e.preventDefault();
      moveNext();
    });
    $("#leftArrow").on("click", function(e) {
      e.preventDefault();
      movePrev();
    });


    /* Swipe functionality */

    var touchstarX = 0;
    var touchstartY = 0;
    var touchendX = 0;
    var touchendY = 0;
    var swipelength = 80;
    var limitY = 150;

    var selector = document.getElementsByTagName("body")[0];

    selector.addEventListener('touchstart', function(e) {
      touchstartX = e.changedTouches[0].screenX;
      touchstartY = e.changedTouches[0].screenY;
    }, false);

    selector.addEventListener('touchend', function(e) {
      touchendX = e.changedTouches[0].screenX;
      touchendY = e.changedTouches[0].screenY;
      handleSwipe();
    }, false);


    function handleSwipe() {
      if(touchendX < touchstartX && ((touchstartX - touchendX) > swipelength) && ((touchendY - touchstartY) < limitY)) {
        moveNext();
        console.log("startX: " + touchstartX + " endX: " + touchendX);
        console.log("startY: " + touchstartY + " endY: " + touchendY);
      }
      else if(touchendX > touchstartX && ((touchendX - touchstartX) > swipelength) && ((touchendY - touchstartY) < limitY)) {
        movePrev();
        console.log("startX: " + touchstartX + " endX: " + touchendX);
        console.log("startY: " + touchstartY + " endY: " + touchendY);
      }
    }


  };

}(jQuery));
