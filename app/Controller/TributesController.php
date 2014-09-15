<?php
App::uses('AppController', 'Controller');
/**
 * Tributes Controller
 *
 * @property Tribute $Tribute
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TributesController extends AppController {

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
		$this->Tribute->recursive = 0;
		$this->set('tributes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tribute->exists($id)) {
			throw new NotFoundException(__('Invalid tribute'));
		}
		$options = array('conditions' => array('Tribute.' . $this->Tribute->primaryKey => $id));
		$this->set('tribute', $this->Tribute->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tribute->create();
			if ($this->Tribute->save($this->request->data)) {
				$this->Session->setFlash(__('The tribute has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tribute could not be saved. Please, try again.'));
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
		if (!$this->Tribute->exists($id)) {
			throw new NotFoundException(__('Invalid tribute'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tribute->save($this->request->data)) {
				$this->Session->setFlash(__('The tribute has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tribute could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tribute.' . $this->Tribute->primaryKey => $id));
			$this->request->data = $this->Tribute->find('first', $options);
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
		$this->Tribute->id = $id;
		if (!$this->Tribute->exists()) {
			throw new NotFoundException(__('Invalid tribute'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tribute->delete()) {
			$this->Session->setFlash(__('The tribute has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tribute could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
