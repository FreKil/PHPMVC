<?php
/**
* Helpers for the template file.
*/
$drygia->data['header'] = '<h1>Header: Drygia</h1>';
$drygia->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
$drygia->data['footer'] = '<p>Footer: &copy; Drygia by Freddy</p>';


/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $drygia = CDrygia::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($drygia->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($drygia->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($drygia->request, true)) . "</pre>";
  return $html;
}