<?php
App::uses('AppController', 'Controller');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AdminsController extends AppController {

      //  public $uses = array('User','Usermeta');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
        public $uses = array('User','Usermeta','Memorial','Tribute','Gift');
        
        public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add','login');
        $user_role = $this->Auth->user('role');
        
        if(!empty($user_role) && $user_role != angels::APP_USER_ROLE_ADMIN) {
            die('invalid area');
        //  $this->redirect("../users/index");
        }
        }

/**
 * index method
 *
 * @return void
 */
	public function index() {
            $this->setadminlayout();
            $this->User->recursive = 0;
            $options = array('role'=>  angels::APP_USER_ROLE_SITEUSER,'User.status'=> angels::APP_USER_STATUS_ACTIVE);
            $this->set('users', $this->Paginator->paginate($options));
            $this->set('site_users', $this->User->find('count',array('conditions'=>array('role'=>  angels::APP_USER_ROLE_SITEUSER,  'User.status'=> angels::APP_USER_STATUS_ACTIVE))));
            $this->set('site_memorials', $this->Memorial->find('count',array('conditions'=>array( 'Memorial.status'=> angels::APP_MEMORIAL_STATUS_ACTIVE))));
            $this->set('site_tributes', $this->Tribute->find('count',array('conditions'=>array( 'Tribute.status'=> angels::APP_TRIBUTE_STATUS_ACTIVE))));
            $this->set('site_gifts', $this->Gift->find('count',array('conditions'=>array( 'Gift.status'=> angels::APP_GIFT_STATUS_ACTIVE))));
            
	}
        
        
        public function setadminlayout() {
           $user_data = $this->Auth->user();
           $this->layout = "adminpage";
           $this->set('user_name',$user_data['Usermeta']['firstname'] ." ".$user_data['Usermeta']['lastname']);
             
        }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
                $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

                    $this->User->create();
              
                    if ($this->User->saveAll($this->request->data)) {
                            $this->Session->setFlash(__('The user has been saved.'));
                            return $this->redirect(array('action' => 'index'));
                    } else {
                            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
       
        public function login() {
            if ($this->request->is('post')) {
                if ($this->Auth->login()) {
                    return $this->redirect($this->Auth->redirect());
                }
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }

        public function logout() {
            return $this->redirect($this->Auth->logout());
        }
        
        public function viewuser($id = null) {
            $this->setadminlayout();
            if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
                $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
        }
        
        public function edituser($id = null) {
            $this->setadminlayout();
            if (!$this->User->exists($id)) {
		throw new NotFoundException(__('Invalid user'));
            }
            if($this->request->is(array('post','put'))) {
                if ($this->User->saveAll($this->request->data)) {
                    $this->set('save_user','true');
                    $this->Session->setFlash(__('The User updated Successfully.'));
                    return true;
                } else {
                        $this->Session->setFlash(__('The memorialcandle could not be saved. Please, try again.'));
                } 
            }
                $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
                $this->request->data = $this->User->find('first', $options);
	}
        
        public function viewmemorial($id = null) {
            $this->setadminlayout();
            if (!$this->Memorial->exists($id)) {
                throw new NotFoundException(__('Invalid user'));
            }
            
            $memorial =  $this->Memorial->find('first',array('conditions'=>array('Memorial.id'=>$id)));
            $user_id = $memorial['Memorial']['user_id'];
            $memorial['Usermeta'] = $this->Usermeta->find('first',array('conditions'=>array('Usermeta.user_id'=>$user_id)));
            $this->set('memorial', $memorial);
        }
        
        public function editmemorial($id = null) {
            $this->setadminlayout();
            if (!$this->Memorial->exists($id)) {
			throw new NotFoundException(__('Invalid Memorial'));
            }
            
            if($this->request->is(array('post','put'))) {
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
                if ($this->Memorial->save($this->request->data)) {
				$this->set('memorial_updated','yes');
                                $this->Session->setFlash(__('The memorial has been Updated.'));
                                //return true;
			} else {
                                $this->set('memorial_updated','no');
				$this->Session->setFlash(__('The memorial could not be saved. Please, try again.'));
                                //return false;
			}
            }
            $options = array('conditions' => array('Memorial.' . $this->Memorial->primaryKey => $id));
            $memorial = $this->Memorial->find('first', $options);
            $user_id = $memorial['User']['id'];
            $user_meta = $this->Usermeta->find('first',array('conditions'=>array('user_id'=> $user_id),'fields'=>array('firstname','lastname')));
            $this->set('user_meta',$user_meta);
            $this->request->data = $memorial;
            
        }
        
        public function memorials() {
            $this->setadminlayout();
        }
        
        public function tributes() {
            $this->setadminlayout();
        }
        
        
        public function viewtribute($id = null) {
            $this->setadminlayout();
            if (!$this->Tribute->exists($id)) {
                throw new NotFoundException(__('Invalid user'));
            }
            
            $tribute =  $this->Tribute->find('first',array('conditions'=>array('Tribute.id'=>$id)));
            $user_id = $tribute['Tribute']['user_id'];
            $tribute['Usermeta'] = $this->Usermeta->find('first',array('conditions'=>array('Usermeta.user_id'=>$user_id)));
            $this->set('tribute', $tribute);
        }
        
        
        public function edittribute($id = null) {
            $this->setadminlayout();
            if (!$this->Tribute->exists($id)) {
			throw new NotFoundException(__('Invalid Tribute'));
            }
            
            if($this->request->is(array('post','put'))) {
                $message = $this->bbcodeHtml($this->request->data['message']);
                    $this->request->data['Tribute']['message'] = $message;
                    unset($this->request->data['message']);
                    if ($this->Tribute->save($this->request->data)) {
				$this->set('tribute_updated','yes');
                                $this->Session->setFlash(__('The Tribute has been Updated.'));
                    	} else {
                                $this->set('tribute_updated','no');
				$this->Session->setFlash(__('The Tribute could not be saved. Please, try again.'));
                    	}
            }
            $options = array('conditions' => array('Tribute.' . $this->Tribute->primaryKey => $id));
            $tribute = $this->Tribute->find('first', $options);
            $user_id = $tribute['User']['id'];
            $user_meta = $this->Usermeta->find('first',array('conditions'=>array('user_id'=> $user_id),'fields'=>array('firstname','lastname')));
            $this->set('user_meta',$user_meta);
            $this->request->data = $tribute;
        }
        
        public function gifts() {
            $this->setadminlayout();
            $this->set('gifts',$this->Gift->find('all'));
        }
        
        public function editgift($id=null) {
            $this->setadminlayout();
            if (!$this->Tribute->exists($id)) {
			throw new NotFoundException(__('Invalid Tribute'));
            }
            
            if($this->request->is(array('post','put'))) {
                
                $upload_status = $this->upload_images($this->request->data,'Gift','image','images','gifts');
                    if(!empty($upload_status) and $upload_status['status'] == true){
                        $this->request->data['Gift']['image'] = $upload_status['filename'];
                    } else {
                        unset( $this->request->data['Gift']['image']);
                    }

                
                if ($this->Gift->save($this->request->data)) {
                    
                    
                    $this->set('gift_updated','true');
                    $this->Session->setFlash(__('The Gift updated Successfully.'));
                } else {
                        $this->Session->setFlash(__('The Gift could not be saved. Please, try again.'));
                }
            }
            
            $gift = $this->Gift->find('first',array('conditions'=>array('Gift.id'=>$id)));
            $user_id = $gift['User']['id'];
            $user_meta = $this->Usermeta->find('first',array('conditions'=>array('user_id'=> $user_id),'fields'=>array('firstname','lastname')));
            $this->set('user_meta',$user_meta);
            $this->request->data = $gift;
        }
}
