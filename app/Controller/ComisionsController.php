<?php
App::uses('AppController', 'Controller');
/**
 * Comisions Controller
 *
 * @property Comision $Comision
 * @property PaginatorComponent $Paginator
 */
class ComisionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comision->recursive = 0;
		$this->set('comisions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comision->exists($id)) {
			throw new NotFoundException(__('Invalid comision'));
		}
		$options = array('conditions' => array('Comision.' . $this->Comision->primaryKey => $id));
		$this->set('comision', $this->Comision->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comision->create();
			if ($this->Comision->save($this->request->data)) {
				$this->Session->setFlash(__('The comision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comision could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comision->exists($id)) {
			throw new NotFoundException(__('Invalid comision'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comision->save($this->request->data)) {
				$this->Session->setFlash(__('The comision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comision could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comision.' . $this->Comision->primaryKey => $id));
			$this->request->data = $this->Comision->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comision->id = $id;
		if (!$this->Comision->exists()) {
			throw new NotFoundException(__('Invalid comision'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Comision->delete()) {
			$this->Session->setFlash(__('The comision has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comision could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Comision->recursive = 0;
		$this->set('comisions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Comision->exists($id)) {
			throw new NotFoundException(__('Invalid comision'));
		}
		$options = array('conditions' => array('Comision.' . $this->Comision->primaryKey => $id));
		$this->set('comision', $this->Comision->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Comision->create();
			if ($this->Comision->save($this->request->data)) {
				$this->Session->setFlash(__('The comision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comision could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Comision->exists($id)) {
			throw new NotFoundException(__('Invalid comision'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comision->save($this->request->data)) {
				$this->Session->setFlash(__('The comision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comision could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comision.' . $this->Comision->primaryKey => $id));
			$this->request->data = $this->Comision->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Comision->id = $id;
		if (!$this->Comision->exists()) {
			throw new NotFoundException(__('Invalid comision'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Comision->delete()) {
			$this->Session->setFlash(__('The comision has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comision could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
