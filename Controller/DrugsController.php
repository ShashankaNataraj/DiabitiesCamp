<?php
App::uses('AppController', 'Controller');
/**
 * Drugs Controller
 *
 * @property Drug $Drug
 */
class DrugsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Drug->recursive = 0;
		$drugs = $this->paginate();
		$this->set('drugs', $drugs);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['Drug'],
			array('records'=>$drugs));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Drug->id = $id;
		if (!$this->Drug->exists()) {
			throw new NotFoundException(__('Invalid drug'));
		}
		$this->set('drug', $this->Drug->read(null, $id));

		// provide a return value for Bancha requests
		return $this->Drug->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Drug->create();
			if ($this->Drug->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Drug->getLastSaveResult();
				}

				$this->Session->setFlash(__('The drug has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Drug->getLastSaveResult();
				}

				$this->Session->setFlash(__('The drug could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Drug->id = $id;
		if (!$this->Drug->exists()) {
			throw new NotFoundException(__('Invalid drug'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Drug->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Drug->getLastSaveResult();
				}

				$this->Session->setFlash(__('The drug has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Drug->getLastSaveResult();
				}

				$this->Session->setFlash(__('The drug could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->Drug->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Drug->id = $id;
		if (!$this->Drug->exists()) {
			throw new NotFoundException(__('Invalid drug'));
		}
		if ($this->Drug->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->Drug->getLastSaveResult();
			}

			$this->Session->setFlash(__('Drug deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->Drug->getLastSaveResult();
		}

		$this->Session->setFlash(__('Drug was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
