<?php
class UsersController extends AppController {

	var $name = 'Users';

	function login(){

		if ($this->Auth->user()){
			$this->redirect('/');
		}

	}

	function logout(){
		$this->Auth->logout();
		$this->redirect('/');
	}

	function myaccount(){
		
	}

	function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_add() {

		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}

	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function admin_delete($id = null) {

		if ($this->RequestHandler->isAjax()){

			if (!$id) {
				$output['error'] = 'Invalid id for site page';
			}

			if ($this->User->delete($id)) {
				$output['deleted'] = true;
			}

			echo json_encode($output);

		} else {

			if (!$id) {
				$this->Session->setFlash(__('Invalid id for user', true));
				$this->redirect(array('action'=>'index'));
			}
			if ($this->User->delete($id)) {
				$this->Session->setFlash(__('User deleted', true));
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(__('User was not deleted', true));
			$this->redirect(array('action' => 'index'));

		}

	}

	function admin_login(){
		if ($this->Auth->user()){
			$this->redirect(array('controller' => 'pages', 'action' => 'index', 'admin' => true));
		}
	}

	function admin_logout() {
		$this->Auth->logout();
		$this->redirect('/');
	}

}
