<?php
App::uses('AppController', 'Controller');
/**
 * Memorialgifts Controller
 *
 * @property Memorialgift $Memorialgift
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MemorialgiftsController extends AppController {

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
		$this->Memorialgift->recursive = 0;
		$this->set('memorialgifts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Memorialgift->exists($id)) {
			throw new NotFoundException(__('Invalid memorialgift'));
		}
		$options = array('conditions' => array('Memorialgift.' . $this->Memorialgift->primaryKey => $id));
		$this->set('memorialgift', $this->Memorialgift->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Memorialgift->create();
			if ($this->Memorialgift->save($this->request->data)) {
				$this->Session->setFlash(__('The memorialgift has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memorialgift could not be saved. Please, try again.'));
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
		if (!$this->Memorialgift->exists($id)) {
			throw new NotFoundException(__('Invalid memorialgift'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Memorialgift->save($this->request->data)) {
				$this->Session->setFlash(__('The memorialgift has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memorialgift could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Memorialgift.' . $this->Memorialgift->primaryKey => $id));
			$this->request->data = $this->Memorialgift->find('first', $options);
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
		$this->Memorialgift->id = $id;
		if (!$this->Memorialgift->exists()) {
			throw new NotFoundException(__('Invalid memorialgift'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Memorialgift->delete()) {
			$this->Session->setFlash(__('The memorialgift has been deleted.'));
		} else {
			$this->Session->setFlash(__('The memorialgift could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
