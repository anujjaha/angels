<?php
App::uses('AppController', 'Controller');
/**
 * Usermetas Controller
 *
 * @property Usermeta $Usermeta
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsermetasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usermeta->recursive = 0;
		$this->set('usermetas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usermeta->exists($id)) {
			throw new NotFoundException(__('Invalid usermeta'));
		}
		$options = array('conditions' => array('Usermeta.' . $this->Usermeta->primaryKey => $id));
		$this->set('usermeta', $this->Usermeta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usermeta->create();
			if ($this->Usermeta->save($this->request->data)) {
				$this->Session->setFlash(__('The usermeta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usermeta could not be saved. Please, try again.'));
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
		if (!$this->Usermeta->exists($id)) {
			throw new NotFoundException(__('Invalid usermeta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usermeta->save($this->request->data)) {
				$this->Session->setFlash(__('The usermeta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usermeta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usermeta.' . $this->Usermeta->primaryKey => $id));
			$this->request->data = $this->Usermeta->find('first', $options);
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
		$this->Usermeta->id = $id;
		if (!$this->Usermeta->exists()) {
			throw new NotFoundException(__('Invalid usermeta'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Usermeta->delete()) {
			$this->Session->setFlash(__('The usermeta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The usermeta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
