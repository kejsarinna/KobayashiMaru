<?php
//
// PHASE: BOOTSTRAP
//
define('KOBAYASHI_INSTALL_PATH', dirname(__FILE__));
define('KOBAYASHI_SITE_PATH', KOBAYASHI_INSTALL_PATH . '/site');

require(KOBAYASHI_INSTALL_PATH.'/src/bootstrap.php');

$kb = CKobayashi::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$kb->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$kb->ThemeEngineRender();

