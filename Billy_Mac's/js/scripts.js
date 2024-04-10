$("button").click(function(){
  $("ul").slideToggle();
});

$("button").click(function(){
  $("ol").slideToggle();
});

$( function() {
  $(".h3").text("How We Started - The Beginning");
  $(".p").text("Billy Johnson, co-founder of Billy Mac's, has always had a knack for cooking and a love for bringing people together over a delicious meal. With a background in hospitality and a passion for creating memorable dining experiences, Billy oversees the kitchen operations at Billy Mac's, ensuring that every dish is made with the freshest ingredients and cooked to perfection.");
} );

$( function() {
  $( "#dialog" ).dialog();
} );

  $(".pacman").attr("src", "Images/aracde/pacman.jpg");
  $(".streetfighterii").attr("src", "Images/aracde/streetfighterii.jpg");
  $(".galaga").attr("src", "Images/aracde/galaga.png");
  $(".donkeykong").attr("src", "Images/aracde/donkeykong.jpg");
  $(".mortalkombat").attr("src", "Images/aracde/mortalkombat.jpg");
  $(".spaceinvaders").attr("src", "Images/aracde/spaceinvaders.png");
  $(".dancedancerevolution").attr("src", "Images/aracde/dancedancerevolution.jpeg");
  $(".thesimpsonsarcadegame").attr("src", "Images/aracde/thesimpsonsarcadegame.jpg");
  $(".mspacman").attr("src", "Images/aracde/mspacman.png");
  $(".mariokartarcadegp").attr("src", "Images/aracde/mariokartarcadegp.png");

$(function() {
  
  $("islide1").click(function () {
    $(".slide").attr("src", "Images/menu/classicburgercombo.jpg");
  });

  $("islide2").click(function () {
    $(".slide").attr("src", "Images/menu/bbqbaconcheeseburger.png");
  });

  $("islide3").click(function () {
    $(".slide").attr("src", "Images/menu/veggieburger.png");
  });

  $("islide4").click(function () {
    $(".slide").attr("src", "Images/menu/macncheeseburger.jpg");
  });

  $("islide5").click(function () {
    $(".slide").attr("src", "Images/menu/mushroomswissburger.jpg");
  });

  $("islide6").click(function () {
    $(".slide").attr("src", "Images/menu/spicychickensandwich.png");
  });

  $("islide7").click(function () {
    $(".slide").attr("src", "Images/menu/buffalochickenwings.jpg");
  });

  $("islide8").click(function () {
    $(".slide").attr("src", "Images/menu/loadedfries.jpg");
  });

  $("islide9").click(function () {
    $(".slide").attr("src", "Images/menu/chilicheesefries.png");
  });

  $("islide10").click(function () {
    $(".slide").attr("src", "Images/menu/garlicparmesanfries.jpg");
  });

});


$("#dialog").dialog({
  maxWidth: 500,
  height: 'auto',
  fluid: true,
  resizeable: false
});
