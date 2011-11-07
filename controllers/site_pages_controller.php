<?php
class SitePagesController extends AppController {

	var $name = 'SitePages';

	//var $scaffold = 'admin';

	function admin_index() {
		$this->SitePage->recursive = 0;
		$this->set('sitePages', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid site page', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sitePage', $this->SitePage->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SitePage->create();
			if ($this->SitePage->save($this->data)) {
				$this->Session->setFlash(__('The site page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site page could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid site page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SitePage->save($this->data)) {
				$this->Session->setFlash(__('The site page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site page could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SitePage->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for site page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SitePage->delete($id)) {
			$this->Session->setFlash(__('Site page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Site page was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
}
