<?php
// enable short tags
if(ini_get('short_open_tag')) {
  ini_set('short_open_tag', 1);
}

//
// PHASE: BOOTSTRAP
//
define('MUFFIN_INSTALL_PATH', dirname(__FILE__));
define('MUFFIN_SITE_PATH', MUFFIN_INSTALL_PATH . '/site');

require(MUFFIN_INSTALL_PATH.'/src/CMuffin/bootstrap.php');

$mu = CMuffin::Instance();
//
// PHASE: FRONTCONTROLLER ROUTE
//
$mu->FrontControllerRoute();
//
// PHASE: THEME ENGINE RENDER
$mu->ThemeEngineRender();