$=jQuery.noConflict(); 
$(document).ready(function($){
  
  $(".heroimg").animate({width: '101%'},3200);
  $(".herotxt").delay(1000).animate({left: '-20px'},1500);
});