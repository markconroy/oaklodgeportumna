$(document).ready(function() {

  // Menu Code
  function mainMenu() {
    var $menuToggle = $('.menu-toggle');
    var $mainMenu = $('.main-menu');
    var $nav = $('.nav');

    if ($(window).width() < 1100) {
      $menuToggle.show();
      $mainMenu.hide();
      $menuToggle.click(function() {
        $mainMenu.toggle();
        $('.nav').toggleClass('active');
        $('body').toggleClass('noscroll');
      });
    } else {
      $menuToggle.hide();
      $mainMenu.show();
    }
  }

  mainMenu();

  // Flexslider Code
  $(window).load(function() {
    $('.flexslider').flexslider({
      controlNav: false,
      directionNav: false
    });
  });

  // List the functions we want to run when the window is resized.
  $(window).resize(function() {
    mainMenu();
  });

});
