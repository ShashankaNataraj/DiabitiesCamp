<?php
App::uses('AppController', 'Controller');
/**
 * PressurePointDistributionAssessments Controller
 *
 * @property PressurePointDistributionAssessment $PressurePointDistributionAssessment
 */
class PressurePointDistributionAssessmentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PressurePointDistributionAssessment->recursive = 0;
		$pressurePointDistributionAssessments = $this->paginate();
		$this->set('pressurePointDistributionAssessments', $pressurePointDistributionAssessments);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['PressurePointDistributionAssessment'],
			array('records'=>$pressurePointDistributionAssessments));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PressurePointDistributionAssessment->id = $id;
		if (!$this->PressurePointDistributionAssessment->exists()) {
			throw new NotFoundException(__('Invalid pressure point distribution assessment'));
		}
		$this->set('pressurePointDistributionAssessment', $this->PressurePointDistributionAssessment->read(null, $id));

		// provide a return value for Bancha requests
		return $this->PressurePointDistributionAssessment->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PressurePointDistributionAssessment->create();
			if ($this->PressurePointDistributionAssessment->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->PressurePointDistributionAssessment->getLastSaveResult();
				}

				$this->Session->setFlash(__('The pressure point distribution assessment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->PressurePointDistributionAssessment->getLastSaveResult();
				}

				$this->Session->setFlash(__('The pressure point distribution assessment could not be saved. Please, try again.'));
			}
		}
		$users = $this->PressurePointDistributionAssessment->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PressurePointDistributionAssessment->id = $id;
		if (!$this->PressurePointDistributionAssessment->exists()) {
			throw new NotFoundException(__('Invalid pressure point distribution assessment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PressurePointDistributionAssessment->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->PressurePointDistributionAssessment->getLastSaveResult();
				}

				$this->Session->setFlash(__('The pressure point distribution assessment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->PressurePointDistributionAssessment->getLastSaveResult();
				}

				$this->Session->setFlash(__('The pressure point distribution assessment could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->PressurePointDistributionAssessment->read(null, $id);
		}
		$users = $this->PressurePointDistributionAssessment->User->find('list');
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
		$this->PressurePointDistributionAssessment->id = $id;
		if (!$this->PressurePointDistributionAssessment->exists()) {
			throw new NotFoundException(__('Invalid pressure point distribution assessment'));
		}
		if ($this->PressurePointDistributionAssessment->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->PressurePointDistributionAssessment->getLastSaveResult();
			}

			$this->Session->setFlash(__('Pressure point distribution assessment deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->PressurePointDistributionAssessment->getLastSaveResult();
		}

		$this->Session->setFlash(__('Pressure point distribution assessment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
