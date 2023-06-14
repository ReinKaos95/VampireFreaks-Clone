<?php 
 function loadController($controller)
{
	$controllerName = ucwords($controller)."Controller";
	$controllerFile = 'controller/'.ucwords($controller).".php";

	if (!is_file($controllerFile)) {
		$controllerFile='controller/'.mainController.'.php';
	}
	require_once $controllerFile;
	$control = new $controllerName();
	return $control;
}

function loadFunction($controller, $action)
{
	if (isset($action)) {
		$controller->$action();
	}else{
		$controller->$mainAction();
	}
}
 ?>