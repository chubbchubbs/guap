<?php
function dump()
{
	echo '<pre style="padding: 5px; color: #0f0; background-color: #000;">';
	var_dump(func_get_args());
	echo '</pre>';
}

if (!function_exists("__elamaAutoload")) {

	function __elamaAutoload($className)
	{
		// Ищем в elamap_api2
		$classPath = $_SERVER['DOCUMENT_ROOT'] . '/elama_api2/' . str_replace('_', '/', $className) . '.php';
		if (file_exists($classPath)) {
			require_once $classPath;
			return true;
		}

		// Ищем в elamap_api
		$classPath = $_SERVER['DOCUMENT_ROOT'] . '/elama_api/' . str_replace('_', '/', $className) . '.php';
		if (file_exists($classPath)) {
			require_once $classPath;
			return true;
		}

		return false;
	}

}

$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);

require_once($yii);
Yii::createWebApplication($config)->run();