<?php

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

echo $controllerName . '<br>';

$actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'index';

echo $actionName . '<br>';

include_once '../controllers/' . $controllerName . 'Controller.php';