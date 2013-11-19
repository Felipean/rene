<?php
App::uses('AppController', 'Controller');
/**
 * Profesors Controller
 *
 * @property Profesor $Profesor
 * @property PaginatorComponent $Paginator
 */
class ProfesorsController extends AppController {

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
		$this->Profesor->recursive = 0;
		$this->set('profesors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profesor->exists($id)) {
			throw new NotFoundException(__('Invalid profesor'));
		}
		$options = array('conditions' => array('Profesor.' . $this->Profesor->primaryKey => $id));
		$this->set('profesor', $this->Profesor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profesor->create();
			if ($this->Profesor->save($this->request->data)) {
				$this->Session->setFlash(__('The profesor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesor could not be saved. Please, try again.'));
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
		if (!$this->Profesor->exists($id)) {
			throw new NotFoundException(__('Invalid profesor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profesor->save($this->request->data)) {
				$this->Session->setFlash(__('The profesor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profesor.' . $this->Profesor->primaryKey => $id));
			$this->request->data = $this->Profesor->find('first', $options);
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
		$this->Profesor->id = $id;
		if (!$this->Profesor->exists()) {
			throw new NotFoundException(__('Invalid profesor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Profesor->delete()) {
			$this->Session->setFlash(__('The profesor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The profesor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Profesor->recursive = 0;
		$this->set('profesors', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Profesor->exists($id)) {
			throw new NotFoundException(__('Invalid profesor'));
		}
		$options = array('conditions' => array('Profesor.' . $this->Profesor->primaryKey => $id));
		$this->set('profesor', $this->Profesor->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Profesor->create();
			if ($this->Profesor->save($this->request->data)) {
				$this->Session->setFlash(__('The profesor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesor could not be saved. Please, try again.'));
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
		if (!$this->Profesor->exists($id)) {
			throw new NotFoundException(__('Invalid profesor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profesor->save($this->request->data)) {
				$this->Session->setFlash(__('The profesor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profesor.' . $this->Profesor->primaryKey => $id));
			$this->request->data = $this->Profesor->find('first', $options);
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
		$this->Profesor->id = $id;
		if (!$this->Profesor->exists()) {
			throw new NotFoundException(__('Invalid profesor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Profesor->delete()) {
			$this->Session->setFlash(__('The profesor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The profesor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
