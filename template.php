<?php

/**
 * Initialize theme settings.
 */
if (is_null(theme_get_setting('color', 'color_variables'))) {
  // Save default theme settings.
  config_set('color_variables.settings', 'color', 'green');

  // Load default settings from the info file.
  theme_get_setting('', TRUE);
}

/**
 * Overrides template_preprocess_page().
 */
function color_variables_preprocess_page(&$variables) {
  // Send theme settings to JS which will update the CSS.
  backdrop_add_js(array(
    'color_variables' => array(
      'color' => theme_get_setting('color', 'color_variables'),
    ),
  ), 'setting');
}
