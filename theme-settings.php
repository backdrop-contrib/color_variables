<?php

$form['color'] = array(
  '#type' => 'radios',
  '#title' => t('Color scheme'),
  '#options' => array(
    '00aa00' => t('Green'),
    '0033aa' => t('Blue'),
    '5500aa' => t('Purple'),
    'cc0000' => t('Red'),
  ),
  '#default_value' => theme_get_setting('color', 'color_variables'),
);
