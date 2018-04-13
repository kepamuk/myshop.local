<?php

/**
 * @param $smarty
 * @param $controllerName
 * @param string $actionName
 */

function loadPage($smarty, $controllerName, $actionName = 'index')
{
  include_once PathPrefix . $controllerName . PathPostfix;

  $function = $actionName . 'Action';
  $function($smarty);
}

/**
 * @param $smarty
 * @param $templateName
 */

function loadTemplate($smarty, $templateName)
{
  $smarty->display($templateName . TemplatePostprefix);
}

/**
 * @param null $value
 * @param int $die
 */

function d($value = null, $die = 1)
{
  echo 'Debug <br><pre>';
  print_r($value);
  echo '</pre>';

  if ($die) die;
}