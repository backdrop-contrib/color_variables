(function($) {
  Backdrop.behaviors.color_variables = {
    attach: function(context, settings) {

      var style = document.documentElement.style;
      var color = Backdrop.settings.color_variables.color;

      // Set CSS variable.
      style.setProperty('--color', '#' + color);

    }
  };
})(jQuery);
