<?php

	/**
	 * IndexController class.
	 */
	class IndexController extends \Phalcon\Mvc\Controller {
	
		/**
		 * indexAction function.
		 * 
		 * @access public
		 * @return void
		 */
		public function indexAction() {
		//	Load a user
			$user = new User();
			
			Phalcon\Tag::setTitle('The page title has been changed by the controller');
			/*
			if ($user->save()) {
				echo 'Saved';
			}
			*/
		}	//	index action
		
	
	}	//	index controller
	