<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

require(dirname(__FILE__) . '/dbConfig.php');
return array(
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'USAII',
	// preloading 'log' component
	'preload' => array('log'),
	// autoloading model and component classes
	'import' => array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
		'application.modules.user.components.*',
		'application.modules.rights.*',
		'application.modules.rights.models.*',
		'application.modules.rights.components.*',
		'application.extensions.yiidebugtb.*', //our extension
	),
	'defaultController' => 'site',
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => '123',
		),
		'user' => array(
			// названия таблиц взяты по умолчанию, их можно изменить
			'tableUsers' => 'users',
			'tableProfiles' => 'users_profiles',
			'tableProfileFields' => 'users_profiles_fields',
		),
		'rights' => array(
		),
	),
	// application components
	'components' => array(
		'user' => array(
			// enable cookie-based authentication
			'allowAutoLogin' => true,
			'loginUrl' => array('/user/login'),
			'class' => 'RWebUser',
		),
		'authManager' => array(
			'class' => 'RDbAuthManager',
			'defaultRoles' => array('Guest'), // дефолтная роль
			'itemTable' => 'auth_item',
			'itemChildTable' => 'auth_item_child',
			'assignmentTable' => 'auth_assignment',
			'rightsTable' => 'users_rights'
		),
		'db' => array(
			'connectionString' => 'mysql:host=' . $dbCofig['db']['host'] . ';dbname=' . $dbCofig['db']['dbname'],
			'enableParamLogging' => true,
			'emulatePrepare' => true,
			'username' => $dbCofig['db']['username'],
			'password' => $dbCofig['db']['password'],
			'charset' => 'utf8',
			'tablePrefix' => '',
		),
		'errorHandler' => array(
			// use action to display errors
			'errorAction' => 'site/error',
		),
		'urlManager' => array(
			'urlFormat' => 'path',
			'rules' => array(
				'<controller:\w+>/admin' => '<controller>/admin',
				'admin/<controller:\w+>' => '<controller>/admin',
				'user/login/<partnerCode:\w+>/' => 'user/login/partner',
				'user/login/<partnerCode:\w+>/<usernameKey:\w+>/<usernameValue:[\.\w]+>' => 'user/login/partner',
				'user/delete/<partnerCode:\w+>/' => 'user/delete/partner',
				'user/registration/<partnerCode:\w+>/' => 'user/registration/partner',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
			'showScriptName' => false,
		),
		'log' => array(
			'class' => 'CLogRouter',
			'enabled' => YII_DEBUG,
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
					'logFile' => 'error.log',
				),
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'info',
					'logFile' => 'info.log',
				),
//				array(
//					'class' => 'CWebLogRoute',
//				),
				array(
					'class' => 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
					'openLastPanel' => false,
					'ipFilters' => array('127.0.0.1', '192.168.1.215'),
				),
				array(// configuration for the toolbar
					'class' => 'XWebDebugRouter',
					'config' => 'alignLeft, opaque, runInDebug, fixedPos, collapsed, yamlStyle',
					'levels' => 'error, warning, trace, profile, info',
					'allowedIPs' => array('127.0.0.1', '::1', '192.168.1.54', '192\.168\.1[0-5]\.[0-9]{3}'),
				),
			),
		),
        'cacheDB'=>array(
            'class'=>'system.caching.CDbCache',
            'cacheTableName' => 'cache',
            'autoCreateCacheTable' => true,
            'connectionID' => 'db',
        ),
        'cacheF'=>array(
            'class'=>'system.caching.CFileCache', // используем кэш на файлах
        ),
	),
	'language' => $_GET['lang'] ? $_GET['lang'] : 'ru',
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => require(dirname(__FILE__) . '/params.php'),
);
?>
