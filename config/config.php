<?php

define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

$template = 'default';

define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostprefix', '.tpl');

define('TemplateWebPath', "templates/{$template}/");

require '../library/Smarty/libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/demo/configs');

$smarty->assign('templateWebPath', TemplateWebPath);