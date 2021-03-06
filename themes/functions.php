<?php
/**
 * Helpers for theming, available for all themes in their template files and functions.php.
 * This file is included right before the themes own functions.php
 */
 

/**
 * Print debuginformation from the framework.
 */
function get_debug() {
  $mu = CMuffin::Instance();
  $html = "<h2>Debuginformation</h2><p>The content of the config array:</p><pre>" . htmlentities(print_r($mu->config, true)) . "</pre>";
  $html .= "<p>The content of the data array:</p><pre>" . htmlentities(print_r($mu->data, true)) . "</pre>";
  $html .= "<p>The content of the request array:</p><pre>" . htmlentities(print_r($mu->request, true)) . "</pre>";
  return $html;
}


/**
 * Prepend the base_url.
 */
function base_url($url) {
  return $mu->request->base_url . trim($url, '/');
}


/**
 * Return the current url.
 */
function current_url() {
  return $mu->request->current_url;
}

?>
