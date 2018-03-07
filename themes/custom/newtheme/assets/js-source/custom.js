(function ($) {
  Drupal.behaviors.consoleLog = {
    attach: function (context, settings) {
      console.log('FFW FE theme1');
      $('.colorbox-load').colorbox();
    }
  };
}(jQuery));
