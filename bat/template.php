<?php

/**
 * Override or insert variables into the page template.
 */
function bat_preprocess_page(&$variables) {
  $variables['bat_subheading'] = theme_get_setting('bat_subheading');


  xdebug_break();

  /*
    // Test for a node type
    if (isset($variables['node'])) {
    if ($variables['node']->type == 'article') {
    drupal_add_css(drupal_get_path('theme', 'bat') . '/css/style.css');
    }
    } */

  // Test for a path
  $matches = "node/*"; // Could also be node/34, <front> or any alias.
  $path = drupal_get_path_alias($_GET['q']);
  $page_match = drupal_match_path($path, $matches);
  if ($path != $_GET['q']) {
    $page_match = $page_match || drupal_match_path($_GET['q'], $matches);
  }
  if ($page_match) {
    drupal_add_css(drupal_get_path('theme', 'bat') . '/style.css');
  }

  /*
    // Test for a role
    $role = 'anonymous user';
    if (in_array($role, $variables['user']->roles)) {
    drupal_add_js(drupal_get_path('theme', 'bat') . '/bat.js');
    }
   */
}
