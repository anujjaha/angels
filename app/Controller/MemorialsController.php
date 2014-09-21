<?php
App::uses('AppController', 'Controller');
/**
 * Memorials Controller
 *
 * @property Memorial $Memorial
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MemorialsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        public $helpers = array('Tinymce');
       
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = "default";
		$this->Memorial->recursive = 0;
		$this->set('memorials', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Memorial->exists($id)) {
			throw new NotFoundException(__('Invalid memorial'));
		}
		$options = array('conditions' => array('Memorial.' . $this->Memorial->primaryKey => $id));
		$this->set('memorial', $this->Memorial->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
                if ($this->request->is('post')) {
                    $message = $this->bbcodeHtml($this->request->data['message']);
                    $this->request->data['Memorial']['message'] = $message;
                    unset($this->request->data['message']);
                    if(!empty($this->request->data['Memorial']['img'])) {
                       
                        $upload_status = $this->upload_images($this->request->data,'Memorial','img','images','memorials');
                    
                        if(!empty($upload_status) and $upload_status['status'] == true){
                            
                            $this->request->data['Memorial']['img'] = $upload_status['filename'];
                        } else {
                            unset( $this->request->data['Memorial']['img']);
                        }
                       
                    }
			$this->Memorial->create();
                       
			if ($this->Memorial->save($this->request->data)) {
				$this->Session->setFlash(__('The memorial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memorial could not be saved. Please, try again.'));
			}
		}
                $this->set('user_id',$this->Auth->user('id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Memorial->exists($id)) {
			throw new NotFoundException(__('Invalid memorial'));
		}
		if ($this->request->is(array('post', 'put'))) {
                    
                         $message = $this->bbcodeHtml($this->request->data['message']);
                        $this->request->data['Memorial']['message'] = $message;  
                        
                        
                        if(!empty($this->request->data['Memorial']['img'])) {
                            $upload_status = $this->upload_images($this->request->data,'Memorial','img','images','memorials');
                            
                            if(!empty($upload_status) and $upload_status['status'] == true){
                            $this->request->data['Memorial']['img'] = $upload_status['filename'];
                            } else {
                                unset( $this->request->data['Memorial']['img']);
                            }
                        }
			if ($this->Memorial->save($this->request->data)) {
                            
                       
                            
				$this->Session->setFlash(__('Thes memorial has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The memorial could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Memorial.' . $this->Memorial->primaryKey => $id));
			$this->request->data = $this->Memorial->find('first', $options);
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
		$this->Memorial->id = $id;
		if (!$this->Memorial->exists()) {
			throw new NotFoundException(__('Invalid memorial'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Memorial->delete()) {
			$this->Session->setFlash(__('The memorial has been deleted.'));
		} else {
			$this->Session->setFlash(__('The memorial could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
