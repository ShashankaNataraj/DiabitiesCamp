<?php
App::uses('AppController', 'Controller');
/**
 * UnitsCodes Controller
 *
 * @property UnitsCode $UnitsCode
 */
class UnitsCodesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UnitsCode->recursive = 0;
		$unitsCodes = $this->paginate();
		$this->set('unitsCodes', $unitsCodes);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['UnitsCode'],
			array('records'=>$unitsCodes));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UnitsCode->id = $id;
		if (!$this->UnitsCode->exists()) {
			throw new NotFoundException(__('Invalid units code'));
		}
		$this->set('unitsCode', $this->UnitsCode->read(null, $id));

		// provide a return value for Bancha requests
		return $this->UnitsCode->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UnitsCode->create();
			if ($this->UnitsCode->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->UnitsCode->getLastSaveResult();
				}

				$this->Session->setFlash(__('The units code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->UnitsCode->getLastSaveResult();
				}

				$this->Session->setFlash(__('The units code could not be saved. Please, try again.'));
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
		$this->UnitsCode->id = $id;
		if (!$this->UnitsCode->exists()) {
			throw new NotFoundException(__('Invalid units code'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UnitsCode->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->UnitsCode->getLastSaveResult();
				}

				$this->Session->setFlash(__('The units code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->UnitsCode->getLastSaveResult();
				}

				$this->Session->setFlash(__('The units code could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->UnitsCode->read(null, $id);
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
		$this->UnitsCode->id = $id;
		if (!$this->UnitsCode->exists()) {
			throw new NotFoundException(__('Invalid units code'));
		}
		if ($this->UnitsCode->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->UnitsCode->getLastSaveResult();
			}

			$this->Session->setFlash(__('Units code deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->UnitsCode->getLastSaveResult();
		}

		$this->Session->setFlash(__('Units code was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
