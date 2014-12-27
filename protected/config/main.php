<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'KulibinTrade',
        'language'=>'ru',
	// preloading 'log' component
	'preload'=>array('log'),
'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
    'yiiwheels' => realpath(__DIR__ . '/../extensions/yiiwheels'), // change if necessary
    ),
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.modules.user.models.*',
                //'application.modules.yiiadmin.models.*',
                'application.modules.user.components.*',
                'ext.yiiext.*',
            'bootstrap.helpers.TbHtml',
            'bootstrap.helpers.TbArray',
        'bootstrap.behaviors.TbWidget',
        'bootstrap.widgets.*'
	),

	'modules'=>array(
            'comment'=>array(
            'class'=>'ext.comment-module.CommentModule',
            'commentableModels'=>array(
                // define commentable Models here (key is an alias that must be lower case, value is the model class name)
                'post'=>'Post'
            ),
            // set this to the class name of the model that represents your users
            'userModelClass'=>'User',
            // set this to the username attribute of User model class
            'userNameAttribute'=>'username',
            // set this to the email attribute of User model class
            'userEmailAttribute'=>'email',
            // you can set controller filters that will be added to the comment controller {@see CController::filters()}
//          'controllerFilters'=>array(),
            // you can set accessRules that will be added to the comment controller {@see CController::accessRules()}
//          'controllerAccessRules'=>array(),
            // you can extend comment class and use your extended one, set path alias here
//          'commentModelClass'=>'comment.models.Comment',
        ),
                  'admin',
            'user'=>array(
            # encrypting method (php hash function)
            'hash' => 'md5',
 
            # send activation email
            'sendActivationMail' => true,
 
            # allow access for non-activated users
            'loginNotActiv' => false,
 
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,
 
            # automatically login from registration
            'autoLogin' => true,
 
            # registration path
            'registrationUrl' => array('/user/registration'),
 
            # recovery password path
            'recoveryUrl' => array('/user/recovery'),
 
            # login form path
            'loginUrl' => array('/user/login'),
 
            # page after login
            'returnUrl' => array('/user/profile'),
 
            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123',
                    'generatorPaths' => array('bootstrap.gii'),
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
            'yiiadmin'=>array(
                'password'=>'123',
                'registerModels'=>array(
                    //'application.models.Contests',
                    //'application.models.BlogPosts',
                    'application.models.*',
                ),
                //'excludeModels'=>array(),
            ),
	),

	// application components
	'components'=>array(
		'user'=>array(
			//'class' => 'WebUser',
			'allowAutoLogin'=>true,
                        'loginUrl' => array('/user/login'),
		),
            'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',   
        ),
            'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',   
        ),
		// uncomment the following to enable URLs in path-format
		
		/*'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),*/
		'shoppingCart' =>
             array(
          'class' => 'ext.yiiext.EShoppingCart',
                   ),
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
	
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=Kulibin',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '123',
			'charset' => 'utf8',
                        'tablePrefix' => 'tbl_',
                   /* 'class'=>'CDbConnection',
                    'connectionString'=>'sqlite:protected/modules/yiiadmin/data/yiiadmin.db',*/
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'andriy0694@mail.ru',
	),
);