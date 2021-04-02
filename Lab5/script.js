$(document).ready(function(){ 
    // CSS code
    $('*').css({
      "box-sizing" : "border-box"
    });

    $('body').css({
      "font-family" : "Arial, Helvetica, Sans-Serif",
      "background-color" : "#333"
    });

    $('nav').css({
      "margin-top" : "2%",
      "padding" : "0.5%",
      "border-bottom" : "1px solid whitesmoke",
      "border-top" : "1px solid whitesmoke",
      "border-radius" : "10px 10px 10px 10px"
    });

    $('nav ul').css({
      "font-size" : "0",
      "margin" : "0",
      "margin-left" : "1%",
      "padding" : "0"
    });

    $('nav ul li').css({
      "display" : "inline-block",
      "position" : "relative",
    });

    $('nav ul li a').css({
      "color" : "whitesmoke",
      "display" : "block",
      "font-size" : "20px",
      "text-decoration" : "none",
      "padding" : "15px 14px",
      "transition" : "0.3s linear",
      "border-radius" : "5%"
    });

    $('.nav-link').mouseover( function() {
      $(this).css("background" , "#3893c0")
    }).mouseout( function() {
      $(this).css("background" , "transparent")
    });

    $('nav ul li ul').css({
      "border-bottom" : "5px solid whitesmoke",
      "display" : "none",
      "position" : "absolute",
      "width" : "150px"
    });

    $('nav ul li ul li').css({
      "border-top" : "1px solid whitesmoke",
      "display" : "block"
    });

    $('nav ul li ul li:first-child').css({
      "border-top" : "none"
    });

    $('nav ul li ul li a').css({
      "background" : "rgb(180, 115, 41)",
      "display" : "block",
      "padding" : "10px 14px"
    });

    $('nav ul li ul li a').mouseover( function() {
      $(this).css( "color" , "black")
    }).mouseout( function() {
      $(this).css("color" , "white")
    });

    // Dropdown menu
    $('nav li').click(
      function(){
        $('ul', this).animate({
          height: 'toggle'
        });
      });
});