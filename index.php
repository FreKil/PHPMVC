<?php

//----------------------------------------------------------
// PHASE: BOOTSTRAP
define('DRYGIA_INSTALL_PATH', dirname(__FILE__));
define('DRYGIA_SITE_PATH', DRYGIA_INSTALL_PATH . '/site');

require(DRYGIA_INSTALL_PATH.'/src/CDrygia/bootstrap.php');

$drygia = CDrygia::Instance();

//----------------------------------------------------------
// PHASE: FRONTCONTROLLER ROUTE
$drygia->FrontControllerRoute();

//----------------------------------------------------------
// PHASE: THEME ENGINE RENDER
$drygia->ThemeEngineRender();