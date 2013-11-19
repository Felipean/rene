<?php
App::uses('AppController', 'Controller');
/**
 * Comisiones Controller
 *
 * @property Comisione $Comisione
 * @property PaginatorComponent $Paginator
 */
class ComisionesController extends AppController {

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
		$this->Comisione->recursive = 0;
		$this->set('comisiones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comisione->exists($id)) {
			throw new NotFoundException(__('Invalid comisione'));
		}
		$options = array('conditions' => array('Comisione.' . $this->Comisione->primaryKey => $id));
		$this->set('comisione', $this->Comisione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comisione->create();
			if ($this->Comisione->save($this->request->data)) {
				$this->Session->setFlash(__('The comisione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comisione could not be saved. Please, try again.'));
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
		if (!$this->Comisione->exists($id)) {
			throw new NotFoundException(__('Invalid comisione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comisione->save($this->request->data)) {
				$this->Session->setFlash(__('The comisione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comisione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comisione.' . $this->Comisione->primaryKey => $id));
			$this->request->data = $this->Comisione->find('first', $options);
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
		$this->Comisione->id = $id;
		if (!$this->Comisione->exists()) {
			throw new NotFoundException(__('Invalid comisione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Comisione->delete()) {
			$this->Session->setFlash(__('The comisione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comisione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Comisione->recursive = 0;
		$this->set('comisiones', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Comisione->exists($id)) {
			throw new NotFoundException(__('Invalid comisione'));
		}
		$options = array('conditions' => array('Comisione.' . $this->Comisione->primaryKey => $id));
		$this->set('comisione', $this->Comisione->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Comisione->create();
			if ($this->Comisione->save($this->request->data)) {
				$this->Session->setFlash(__('The comisione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comisione could not be saved. Please, try again.'));
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
		if (!$this->Comisione->exists($id)) {
			throw new NotFoundException(__('Invalid comisione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comisione->save($this->request->data)) {
				$this->Session->setFlash(__('The comisione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comisione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comisione.' . $this->Comisione->primaryKey => $id));
			$this->request->data = $this->Comisione->find('first', $options);
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
		$this->Comisione->id = $id;
		if (!$this->Comisione->exists()) {
			throw new NotFoundException(__('Invalid comisione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Comisione->delete()) {
			$this->Session->setFlash(__('The comisione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comisione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
