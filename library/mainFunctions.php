<?php

/**
 * @param $controllerName
 * @param string $actionName
 */

function loadPage($controllerName, $actionName = 'index')
{
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function();
}