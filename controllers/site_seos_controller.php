<?php
class SiteSeosController extends AppController {

	var $name = 'SiteSeos';

	function admin_index() {
		$this->SitePagesSeo->recursive = 0;
		$this->set('sitePagesSeos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid site pages seo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sitePagesSeo', $this->SitePagesSeo->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SitePagesSeo->create();
			if ($this->SitePagesSeo->save($this->data)) {
				$this->Session->setFlash(__('The site pages seo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site pages seo could not be saved. Please, try again.', true));
			}
		}
		$sitePages = $this->SiteSeo->SitePage->find('list');
		$this->set(compact('sitePages'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid site pages seo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SitePagesSeo->save($this->data)) {
				$this->Session->setFlash(__('The site pages seo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site pages seo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SitePagesSeo->read(null, $id);
		}
		$sitePages = $this->SitePagesSeo->SitePage->find('list');
		$this->set(compact('sitePages'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for site pages seo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SitePagesSeo->delete($id)) {
			$this->Session->setFlash(__('Site pages seo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Site pages seo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
