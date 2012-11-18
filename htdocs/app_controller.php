<?php
// file: /app/app_controller.php

class AppController extends Controller {
	// class variables

	var $helpers = array('Session','Form','Javascript','Facebook.Facebook','Wijmocake.Wijmo');
	var $components = array(
		'Session',
		'Auth',
		'Facebook.Connect',
		'DebugKit.Toolbar',
		'RequestHandler'
	);

	/**
	 * Before any Controller action
	 */
	function beforeFilter() {

		$this->Auth->allow('index','view','display');

		$this->set('user', $this->Auth->user());
		$this->set('facebook_user', $this->Connect->user());

		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
            $this->layout = 'admin';
        }

        if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
			$this->autoRender = false; 
			$this->layout = 'ajax';
		} 
	}

}
?> 