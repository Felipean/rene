<?php
App::uses('AppController', 'Controller');
/**
 * Evaluaciones Controller
 *
 * @property Evaluacione $Evaluacione
 * @property PaginatorComponent $Paginator
 */
class EvaluacionesController extends AppController {

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
		$this->Evaluacione->recursive = 0;
		$this->set('evaluaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Evaluacione->exists($id)) {
			throw new NotFoundException(__('Invalid evaluacione'));
		}
		$options = array('conditions' => array('Evaluacione.' . $this->Evaluacione->primaryKey => $id));
		$this->set('evaluacione', $this->Evaluacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evaluacione->create();
			if ($this->Evaluacione->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluacione could not be saved. Please, try again.'));
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
		if (!$this->Evaluacione->exists($id)) {
			throw new NotFoundException(__('Invalid evaluacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Evaluacione->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Evaluacione.' . $this->Evaluacione->primaryKey => $id));
			$this->request->data = $this->Evaluacione->find('first', $options);
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
		$this->Evaluacione->id = $id;
		if (!$this->Evaluacione->exists()) {
			throw new NotFoundException(__('Invalid evaluacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Evaluacione->delete()) {
			$this->Session->setFlash(__('The evaluacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The evaluacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Evaluacione->recursive = 0;
		$this->set('evaluaciones', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Evaluacione->exists($id)) {
			throw new NotFoundException(__('Invalid evaluacione'));
		}
		$options = array('conditions' => array('Evaluacione.' . $this->Evaluacione->primaryKey => $id));
		$this->set('evaluacione', $this->Evaluacione->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Evaluacione->create();
			if ($this->Evaluacione->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluacione could not be saved. Please, try again.'));
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
		if (!$this->Evaluacione->exists($id)) {
			throw new NotFoundException(__('Invalid evaluacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Evaluacione->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Evaluacione.' . $this->Evaluacione->primaryKey => $id));
			$this->request->data = $this->Evaluacione->find('first', $options);
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
		$this->Evaluacione->id = $id;
		if (!$this->Evaluacione->exists()) {
			throw new NotFoundException(__('Invalid evaluacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Evaluacione->delete()) {
			$this->Session->setFlash(__('The evaluacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The evaluacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
