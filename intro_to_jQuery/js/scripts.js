$( function() {
    $( "#accordion" ).accordion();

    $("p").css("color", "white");
    $(".pcolor").css("color", "black");
    $("#container").css("background-color", "#adc178");
    $(".ptext").text("This engagement is where users reply to the creator's content.");
    $(".li2").text("Just text");
    $(".h2").text("Social Interactions");
} );

$( function() {
    $("body").css("background-color", "#45930b");
    $("body").css("font-family", 'Madimi One', sans-serif);
 
    $("h2").css("font-size", "2em");
    $("h2").css("text-align", "center");
} );

$("button").click(function(){
    $("ul").slideToggle();
});

$( function() {
    $( "#datepicker" ).datepicker();
} );

$( function() {
    $( "#menu" ).menu();
  } );

$( function() {
  $( "#traditional" ).selectmenu();
 
  $( "#image-based" ).selectmenu();
 
  $( "#video-based" )
    .selectmenu()
    .selectmenu( "menuWidget" )
      .addClass( "overflow" );
      
  $( "#discussion" ).selectmenu();
  } );