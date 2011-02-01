<?php
class BannerItemsController extends BannerAppController {

	var $name = 'BannerItems';
	var $helpers = array('Media.Media');

	function admin_add() {
		if (!empty($this->data)) {
			$this->BannerItem->create();
			if ($this->BannerItem->save($this->data)) {
				$this->Session->setFlash(__('The banner item has been saved', true));
				$this->redirect(array('controller' => 'banners', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banner item could not be saved. Please, try again.', true));
			}
		}
		$banners = $this->BannerItem->Banner->find('list');
		$this->set(compact('banners'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banner item', true));
			$this->redirect(array('controller' => 'banners', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BannerItem->save($this->data)) {
				$this->Session->setFlash(__('The banner item has been saved', true));
					$this->redirect(array('controller' => 'banners', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banner item could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BannerItem->read(null, $id);
		}
		$banners = $this->BannerItem->Banner->find('list');
		$this->set(compact('banners'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banner item', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BannerItem->delete($id)) {
			$this->Session->setFlash(__('Banner item deleted', true));
			$this->redirect(array('controller' => 'banners', 'action' => 'index'));
		}
		$this->Session->setFlash(__('Banner item was not deleted', true));
		$this->redirect(array('controller' => 'banners', 'action' => 'index'));
	}
}
?>