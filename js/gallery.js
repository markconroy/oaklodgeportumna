$(document).ready(function() {

  // Code for our very simple gallery.

  function gallery() {

    var $galleryButtonOpen = $('.gallery--button');
    var $galleryButtonClose = $('.gallery--popup--close');
    var $galleryItemWrapper = $('.gallery--item');
    var $galleryImage = $('.gallery--popup-item')

    $galleryButtonOpen.each(function() {
      $(this).click(function() {
        $(this).closest($galleryItemWrapper).find($galleryImage).fadeIn();
      });
    });

    $galleryButtonClose.click(function() {
      $galleryImage.fadeOut();
    });
  }

  gallery();

});
