<?php
App::uses('AppController', 'Controller');
/**
 * Profesores Controller
 *
 * @property Profesore $Profesore
 * @property PaginatorComponent $Paginator
 */
class ProfesoresController extends AppController {

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
		$this->Profesore->recursive = 0;
		$this->set('profesores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profesore->exists($id)) {
			throw new NotFoundException(__('Invalid profesore'));
		}
		$options = array('conditions' => array('Profesore.' . $this->Profesore->primaryKey => $id));
		$this->set('profesore', $this->Profesore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profesore->create();
			if ($this->Profesore->save($this->request->data)) {
				$this->Session->setFlash(__('The profesore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesore could not be saved. Please, try again.'));
			}
		}
		$sedes = $this->Profesore->Sede->find('list');
		$proyectos = $this->Profesore->Proyecto->find('list');
		$this->set(compact('sedes', 'proyectos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Profesore->exists($id)) {
			throw new NotFoundException(__('Invalid profesore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profesore->save($this->request->data)) {
				$this->Session->setFlash(__('The profesore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profesore.' . $this->Profesore->primaryKey => $id));
			$this->request->data = $this->Profesore->find('first', $options);
		}
		$sedes = $this->Profesore->Sede->find('list');
		$proyectos = $this->Profesore->Proyecto->find('list');
		$this->set(compact('sedes', 'proyectos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Profesore->id = $id;
		if (!$this->Profesore->exists()) {
			throw new NotFoundException(__('Invalid profesore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Profesore->delete()) {
			$this->Session->setFlash(__('The profesore has been deleted.'));
		} else {
			$this->Session->setFlash(__('The profesore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Profesore->recursive = 0;
		$this->set('profesores', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Profesore->exists($id)) {
			throw new NotFoundException(__('Invalid profesore'));
		}
		$options = array('conditions' => array('Profesore.' . $this->Profesore->primaryKey => $id));
		$this->set('profesore', $this->Profesore->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Profesore->create();
			if ($this->Profesore->save($this->request->data)) {
				$this->Session->setFlash(__('The profesore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesore could not be saved. Please, try again.'));
			}
		}
		$sedes = $this->Profesore->Sede->find('list');
		$proyectos = $this->Profesore->Proyecto->find('list');
		$this->set(compact('sedes', 'proyectos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Profesore->exists($id)) {
			throw new NotFoundException(__('Invalid profesore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profesore->save($this->request->data)) {
				$this->Session->setFlash(__('The profesore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profesore.' . $this->Profesore->primaryKey => $id));
			$this->request->data = $this->Profesore->find('first', $options);
		}
		$sedes = $this->Profesore->Sede->find('list');
		$proyectos = $this->Profesore->Proyecto->find('list');
		$this->set(compact('sedes', 'proyectos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Profesore->id = $id;
		if (!$this->Profesore->exists()) {
			throw new NotFoundException(__('Invalid profesore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Profesore->delete()) {
			$this->Session->setFlash(__('The profesore has been deleted.'));
		} else {
			$this->Session->setFlash(__('The profesore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
