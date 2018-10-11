$=jQuery.noConflict();
$(document).ready(function($){
    

    // http://ganlanyuan.github.io/tiny-slider/tests/index.html#autoplay_wrapper
    // https://github.com/ganlanyuan/tiny-slider
    var slider = tns({
        // container: '.my-slider',
        // "mode": "gallery",
        // "items": 1,
        // "speed": 1000,
        // "slideBy": "page",
        // "mouseDrag": true,
        // "swipeAngle": true,
        // "controlsText": ["", ""],
        // "viewportMax": true,
        // "animateDelay": false,

        "container": ".my-slider",
        "items": 1,
        "mouseDrag": true,
        "slideBy": "page",
        "controlsText": ["", ""],
        "swipeAngle": false,
        "speed": 400

      });

      $('.tns-controls button:nth-child(2)')
      .mouseenter(function() {
        $(this).animate({opacity: 1}, 100).animate({'margin-right': 0},100);
      })
      .mouseleave(function() {
        $(this).animate({opacity: 0}, 200).animate({'margin-right': -30},100);
      });
      $('.tns-controls button:nth-child(1)')
      .mouseenter(function() {
        $(this).animate({opacity: 1}, 100).animate({'margin-left': 0},100);
      })
      .mouseleave(function() {
        $(this).animate({opacity: 0}, 200).animate({'margin-left': -30},100);
      });

});