<?php
App::uses('AppController', 'Controller');
/**
 * Memorialcandles Controller
 *
 * @property Memorialcandle $Memorialcandle
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MemorialcandlesController extends AppController {

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
		$this->Memorialcandle->recursive = 0;
		$this->set('memorialcandles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Memorialcandle->exists($id)) {
			throw new NotFoundException(__('Invalid memorialcandle'));
		}
		$options = array('conditions' => array('Memorialcandle.' . $this->Memorialcandle->primaryKey => $id));
		$this->set('memorialcandle', $this->Memorialcandle->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Memorialcandle->create();
			if ($this->Memorialcandle->save($this->request->data)) {
				$this->Session->setFlash(__('The memorialcandle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memorialcandle could not be saved. Please, try again.'));
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
		if (!$this->Memorialcandle->exists($id)) {
			throw new NotFoundException(__('Invalid memorialcandle'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Memorialcandle->save($this->request->data)) {
				$this->Session->setFlash(__('The memorialcandle has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memorialcandle could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Memorialcandle.' . $this->Memorialcandle->primaryKey => $id));
			$this->request->data = $this->Memorialcandle->find('first', $options);
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
		$this->Memorialcandle->id = $id;
		if (!$this->Memorialcandle->exists()) {
			throw new NotFoundException(__('Invalid memorialcandle'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Memorialcandle->delete()) {
			$this->Session->setFlash(__('The memorialcandle has been deleted.'));
		} else {
			$this->Session->setFlash(__('The memorialcandle could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
