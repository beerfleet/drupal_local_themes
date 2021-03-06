<?php

/**
 * @file
 * Theme setting callbacks for the BAT theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function bat_form_system_theme_settings_alter(&$form, &$form_state) {
  xdebug_break();
  $form['bat_subheading'] = array(
    '#type' => 'textfield',
    '#title' => '/*/*/*/*//*/' . t('Sub-heading') . '/*/*/*/*/*/*/',
    '#default_value' => theme_get_setting('bat_subheading'),
    '#description' => t('Displays a sub-heading below the main title. Different from the "slogan" because it will display on every page.'),
    '#weight' => -2,
  );
}