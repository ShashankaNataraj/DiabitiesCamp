<?php
App::uses('AppController', 'Controller');
/**
 * Histories Controller
 *
 * @property History $History
 */
class HistoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->History->recursive = 0;
		$histories = $this->paginate();
		$this->set('histories', $histories);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['History'],
			array('records'=>$histories));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->History->id = $id;
		if (!$this->History->exists()) {
			throw new NotFoundException(__('Invalid history'));
		}
		$this->set('history', $this->History->read(null, $id));

		// provide a return value for Bancha requests
		return $this->History->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->History->create();
			if ($this->History->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->History->getLastSaveResult();
				}

				$this->Session->setFlash(__('The history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->History->getLastSaveResult();
				}

				$this->Session->setFlash(__('The history could not be saved. Please, try again.'));
			}
		}
		$users = $this->History->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->History->id = $id;
		if (!$this->History->exists()) {
			throw new NotFoundException(__('Invalid history'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->History->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->History->getLastSaveResult();
				}

				$this->Session->setFlash(__('The history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->History->getLastSaveResult();
				}

				$this->Session->setFlash(__('The history could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->History->read(null, $id);
		}
		$users = $this->History->User->find('list');
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
		$this->History->id = $id;
		if (!$this->History->exists()) {
			throw new NotFoundException(__('Invalid history'));
		}
		if ($this->History->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->History->getLastSaveResult();
			}

			$this->Session->setFlash(__('History deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->History->getLastSaveResult();
		}

		$this->Session->setFlash(__('History was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
