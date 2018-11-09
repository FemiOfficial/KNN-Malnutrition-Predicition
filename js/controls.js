$(document).ready(function(){
  $(".first").on('click', function(){
    $(".second_part").show();
    $(".first_part").hide();
    $(".third_part").hide();
    $(".fourth_part").hide();
  });
  $(".second").on('click', function(){
    $(".second_part").hide();
    $(".first_part").hide();
    $(".third_part").show();
    $(".fourth_part").hide();
  });
  $(".third").on('click', function(){
    $(".second_part").hide();
    $(".first_part").hide();
    $(".third_part").hide();
    $(".fourth_part").show();
    $(".submit-btn").show();

  });
});
