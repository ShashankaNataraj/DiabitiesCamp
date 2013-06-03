<?php
App::uses('AppController', 'Controller');
/**
 * NutritionalStatuses Controller
 *
 * @property NutritionalStatus $NutritionalStatus
 */
class NutritionalStatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->NutritionalStatus->recursive = 0;
		$nutritionalStatuses = $this->paginate();
		$this->set('nutritionalStatuses', $nutritionalStatuses);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['NutritionalStatus'],
			array('records'=>$nutritionalStatuses));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->NutritionalStatus->id = $id;
		if (!$this->NutritionalStatus->exists()) {
			throw new NotFoundException(__('Invalid nutritional status'));
		}
		$this->set('nutritionalStatus', $this->NutritionalStatus->read(null, $id));

		// provide a return value for Bancha requests
		return $this->NutritionalStatus->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NutritionalStatus->create();
			if ($this->NutritionalStatus->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->NutritionalStatus->getLastSaveResult();
				}

				$this->Session->setFlash(__('The nutritional status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->NutritionalStatus->getLastSaveResult();
				}

				$this->Session->setFlash(__('The nutritional status could not be saved. Please, try again.'));
			}
		}
		$users = $this->NutritionalStatus->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->NutritionalStatus->id = $id;
		if (!$this->NutritionalStatus->exists()) {
			throw new NotFoundException(__('Invalid nutritional status'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NutritionalStatus->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->NutritionalStatus->getLastSaveResult();
				}

				$this->Session->setFlash(__('The nutritional status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->NutritionalStatus->getLastSaveResult();
				}

				$this->Session->setFlash(__('The nutritional status could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->NutritionalStatus->read(null, $id);
		}
		$users = $this->NutritionalStatus->User->find('list');
		$this->set(compact('users'));
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
		$this->NutritionalStatus->id = $id;
		if (!$this->NutritionalStatus->exists()) {
			throw new NotFoundException(__('Invalid nutritional status'));
		}
		if ($this->NutritionalStatus->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->NutritionalStatus->getLastSaveResult();
			}

			$this->Session->setFlash(__('Nutritional status deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->NutritionalStatus->getLastSaveResult();
		}

		$this->Session->setFlash(__('Nutritional status was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
