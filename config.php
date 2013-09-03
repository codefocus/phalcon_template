<?php
	
	
	$config = array();
	
	
	$config['Site'] = array(
		'dir'				=> __DIR__,
		'defaults'			=> array(
			'title'				=> 'Welcome to my internets',
		),
		
		
	);
	
	
	$config['Phalcon'] = array(
		'dirs'				=> array(
			'models'			=> $config['Site']['dir'].'/models/',
			'views'				=> $config['Site']['dir'].'/views/',
			'controllers'		=> $config['Site']['dir'].'/controllers/',
		),
		'db'				=> array(
			'development'		=> array(
				'host'				=> 'localhost',
				'dbname'			=> 'test_dev',
				'username'			=> 'test_dev',
				'password'			=> '',
			),
			'production'		=> array(
				'host'				=> 'localhost',
				'dbname'			=> 'test',
				'username'			=> 'test',
				'password'			=> '',
			),
		),

	);
	
	
	