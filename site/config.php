<?php
/**
* Site configuration, this file is changed by user per site.
**/

//-------------------------------------------------------------------------------------------------------
//Set level of error reporting
error_reporting(-1);
ini_set('display_errors', 1);


//-------------------------------------------------------------------------------------------------------
//Define some config variables.
$ly->config['session_name'] = preg_replace('/[:\.\/-_]/', '', $_SERVER["SERVER_NAME"]);
$ly->config['timezone'] = 'Europe/Stockholm';
$ly->config['character_encoding'] = 'UTF-8';
$ly->config['language'] = 'en';


//-------------------------------------------------------------------------------------------------------
//Define the controllers, their classname and enable/disable them.
$ly->config['controllers'] = array(
  'index'     => array('enabled' => true,'class' => 'CCIndex'),
);

//-------------------------------------------------------------------------------------------------------
// Settings for the theme.
$ly->config['theme'] = array(
  'name'    => 'core',
);

//-------------------------------------------------------------------------------------------------------
//Set a base_url to use another than the default calculated
$ly->config['base_url'] = null;

//-------------------------------------------------------------------------------------------------------
//What type of urls should be used?
//default      = 0      => index.php/controller/method/arg1/arg2/arg3
//clean        = 1      => controller/method/arg1/arg2/arg3
//querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
$ly->config['url_type'] = 1;