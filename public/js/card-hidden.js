$(document).ready(function() {
  function checkFullPageBackgroundImage() {
    $page = $('.full-page');
    image_src = $page.data('image');
    if (image_src !== undefined) {
      image_container = '<div class="full-page-background" style="background-image: url(' + image_src + ') "/>'
      $page.append(image_container);
    }
  };
  checkFullPageBackgroundImage();
  setTimeout(function() {
    $('.card').removeClass('card-hidden');
  }, 700)
});
