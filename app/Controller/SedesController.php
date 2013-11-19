<?php
App::uses('AppController', 'Controller');
/**
 * Sedes Controller
 *
 * @property Sede $Sede
 * @property PaginatorComponent $Paginator
 */
class SedesController extends AppController {

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
		$this->Sede->recursive = 0;
		$this->set('sedes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sede->exists($id)) {
			throw new NotFoundException(__('Invalid sede'));
		}
		$options = array('conditions' => array('Sede.' . $this->Sede->primaryKey => $id));
		$this->set('sede', $this->Sede->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sede->create();
			if ($this->Sede->save($this->request->data)) {
				$this->Session->setFlash(__('The sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sede could not be saved. Please, try again.'));
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
		if (!$this->Sede->exists($id)) {
			throw new NotFoundException(__('Invalid sede'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sede->save($this->request->data)) {
				$this->Session->setFlash(__('The sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sede could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sede.' . $this->Sede->primaryKey => $id));
			$this->request->data = $this->Sede->find('first', $options);
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
		$this->Sede->id = $id;
		if (!$this->Sede->exists()) {
			throw new NotFoundException(__('Invalid sede'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sede->delete()) {
			$this->Session->setFlash(__('The sede has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sede could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Sede->recursive = 0;
		$this->set('sedes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Sede->exists($id)) {
			throw new NotFoundException(__('Invalid sede'));
		}
		$options = array('conditions' => array('Sede.' . $this->Sede->primaryKey => $id));
		$this->set('sede', $this->Sede->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Sede->create();
			if ($this->Sede->save($this->request->data)) {
				$this->Session->setFlash(__('The sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sede could not be saved. Please, try again.'));
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
		if (!$this->Sede->exists($id)) {
			throw new NotFoundException(__('Invalid sede'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sede->save($this->request->data)) {
				$this->Session->setFlash(__('The sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sede could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sede.' . $this->Sede->primaryKey => $id));
			$this->request->data = $this->Sede->find('first', $options);
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
		$this->Sede->id = $id;
		if (!$this->Sede->exists()) {
			throw new NotFoundException(__('Invalid sede'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sede->delete()) {
			$this->Session->setFlash(__('The sede has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sede could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
