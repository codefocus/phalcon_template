<?php

	try {
	
	//	Load config
		require_once('config.php');
	
	//	Register an autoloader
		$loader = new \Phalcon\Loader();
		$loader->registerDirs(array(
			$config['Phalcon']['dirs']['controllers'],
			$config['Phalcon']['dirs']['models'],
		))->register();
	
	//	Create a DI
		$di = new Phalcon\DI\FactoryDefault();
		
	//	Set up the database connection
	    $di->set('db', function(){
	    	global $config;
	        return new \Phalcon\Db\Adapter\Pdo\Postgresql($config['Phalcon']['db']['development']);
	    });
		
	
	//	Setting up the view component
		$di->set('view', function(){
			global $config;
			$view = new \Phalcon\Mvc\View();
			$view->setViewsDir($config['Phalcon']['dirs']['views']);
			return $view;
		});
		
	//	Set some view defaults.
	//	These can be overwritten by the controllers.
		Phalcon\Tag::setDoctype(HTML5);
		Phalcon\Tag::setTitle($config['Site']['defaults']['title']);
		$css		= array(
			'/css/grid.css',
			'/css/test.css',
		);
		$js_head	= array(
			'//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
		);
		$js_foot	= array(
			'/js/test.js',
		);
		
	
	//	Handle the request
		$application = new \Phalcon\Mvc\Application($di);
	
		echo $application->handle()->getContent();
	
	}
	catch(\Phalcon\Exception $e) {
		echo "PhalconException: ", $e->getMessage();
	}
	