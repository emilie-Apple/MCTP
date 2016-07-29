// Ouverture et fermeture de la modal pour Maçonnerie
$( ".window1" ).click(function() {
    setTimeout(function(){
        $(".modal1").fadeIn();
        $(".close1").css("width", "30px");
        $(".close1").css("height", "30px");
    }, 800);
});

$( ".close1" ).click(function() {
    $(".modal1").fadeOut();
    $(".close1").css("width", "0px");
    $(".close1").css("height", "0px");
});


// Ouverture et fermeture de la modal pour Carrelage
$( ".window2" ).click(function() {
    setTimeout(function(){
        $(".modal2").fadeIn();
        $(".close2").css("width", "30px");
        $(".close2").css("height", "30px");
    }, 800);
});

$( ".close2" ).click(function() {
    $(".modal2").fadeOut();
    $(".close2").css("width", "0px");
    $(".close2").css("height", "0px");
});

// Ouverture et fermeture de la modal pour Terrassement
$( ".window3" ).click(function() {
    setTimeout(function(){
        $(".modal3").fadeIn();
        $(".close3").css("width", "30px");
        $(".close3").css("height", "30px");
    }, 800);
});

$( ".close3" ).click(function() {
    $(".modal3").fadeOut();
    $(".close3").css("width", "0px");
    $(".close3").css("height", "0px");
});

// Ouverture et fermeture de la modal pour Terrassement
$( ".window4" ).click(function() {
    setTimeout(function(){
        $(".modal4").fadeIn();
        $(".close4").css("width", "30px");
        $(".close4").css("height", "30px");
    }, 800);
});

$( ".close4" ).click(function() {
    $(".modal4").fadeOut();
    $(".close4").css("width", "0px");
    $(".close4").css("height", "0px");
});