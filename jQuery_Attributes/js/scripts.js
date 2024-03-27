$( function() {
    $("p").css("color", "black");
    $("#container").css("background-color", "#8ecae6");
} );

$( function() {
    $("body").css("background-color", "#219ebc");
    $("body").css("font-family", 'Abril Fatface');
 
    $("h2").css("font-size", "2em");
    $("h2").css("text-align", "center");
} );

$("button").click(function(){
  $("ul").slideToggle();
});

  $( function() {
    $( "#dialog" ).dialog();
  } );

  $(".chicken_kit").attr("src", "Images/Chicken_Kit.jpg");
  $(".dinosaur_kit").attr("src", "Images/Dinosaur_Kit.jpg");
  $(".lion_kit").attr("src", "Images/Lion_Kit.jpg");
  $(".narwhal_kit").attr("src", "Images/Narwhal_Kit.jpg");
  $(".pig_kit").attr("src", "Images/Pig_Kit.jpg");
  $(".bunny_kit").attr("src", "Images/Bunny_Kit.jpg");


$(function() {
  
  $("#kslide1").click(function () {
    $(".slide").attr("src", "Images/Chicken_Kit.jpg");
  });

  $("#kslide2").click(function () {
    $(".slide").attr("src", "Images/Dinosaur_Kit.jpg");
  });

  $("#kslide3").click(function () {
    $(".slide").attr("src", "Images/Lion_Kit.jpg");
  });

  $("#kslide4").click(function () {
    $(".slide").attr("src", "Images/Narwhal_Kit.jpg");
  });

  $("#kslide5").click(function () {
    $(".slide").attr("src", "Images/Pig_Kit.jpg");
  });

  $("#kslide6").click(function () {
    $(".slide").attr("src", "Images/Bunny_Kit.jpg");
  });

});
 
