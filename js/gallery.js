$(document).ready(function() {

  // Code for our very simple gallery.

  $('.gallery--popup-item').hide();

  $('.gallery--button').click(function() {
    $('.gallery--popup').show();
  });

  $('.gallery--popup--close').click(function() {
    $('.gallery--popup').hide();
    $('.gallery--popup--item').hide();
  });

  $('.gallery--button--1').click(function() {
    $('.gallery-popup--item--1').show();
  });
  $('.gallery--button--2').click(function() {
    $('.gallery-popup--item--2').show();
  });
  $('.gallery--button--3').click(function() {
    $('.gallery-popup--item--3').show();
  });
  $('.gallery--button--4').click(function() {
    $('.gallery-popup--item--4').show();
  });
  $('.gallery--button--5').click(function() {
    $('.gallery-popup--item--5').show();
  });
  $('.gallery--button--6').click(function() {
    $('.gallery-popup--item--6').show();
  });

});
