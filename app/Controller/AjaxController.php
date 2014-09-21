<?php
App::uses('AppController', 'Controller');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Ajaxcontroller extends AppController {
    
    public $uses = array('User','Usermeta','Gift','Memorial','Tribute');
    
    public function showuserlist() {
        $this->autoRender = false;
        $users = $this->User->find('all');
        $show_users = array();
        $sr=0;
        foreach($users as $user) {
            $gender = "Not to Specify";
            $status = "Blocked";
            
            if($user['Usermeta']['gender'] == angels::APP_GENDER_MALE) {
                $gender = "Male";
            } 
            if ( $user['Usermeta']['gender'] == angels::APP_GENDER_FEMALE) {
                $gender = "Female";
            }
            if($user['User']['status'] == angels::APP_USER_STATUS_ACTIVE) {
                $status = "Active";
            } 
            if ( $user['User']['status'] == angels::APP_USER_STATUS_INACTIVE) {
                $status = "Inactive";
            }
            
            $user_id = $user['Usermeta']['id'];
            $show_users['data'][$sr] = array($user['Usermeta']['firstname']." ".$user['Usermeta']['lastname'],
                                $user['Usermeta']['add_lineone']." ".$user['Usermeta']['add_linetwo'],
                                $user['Usermeta']['city'],$user['Usermeta']['state'],
                                $user['Usermeta']['dob_day'],$gender,$status,
                                "<a href=".$this->base."/admins/viewuser/".$user_id.">View</a>",
                                "<a href=".$this->base."/admins/edituser/".$user_id.">Edit</a>" ,
                                );
            $sr++;
        }
        echo json_encode($show_users);
        exit;
    }
    
    public function showmemorials() {
       $this->autoRender = false;
       $all_memorials = $this->Memorial->find('all');
       $show_memorial = array();
       $sr=0;
       foreach($all_memorials as $memorials) {
           $memorial_id = $memorials['Memorial']['id'];
           $user_id = $memorials['User']['id'];
           $user_name = $this->Usermeta->find('first',array('conditions'=>array('user_id'=>$user_id) , 'fields' => ('firstname')));
           //$this->Html->url('/').'admins/edit/'.$memorial_id;
           $show_memorial['data'][$sr] = array($user_name['Usermeta']['firstname'],
                                               $memorials['Memorial']['firstname']. " " .$memorials['Memorial']['lastname'],
                                               $memorials['Memorial']['dob_day']. "-" .$memorials['Memorial']['dob_month']. "-".$memorials['Memorial']['dob_year'],
                                               $memorials['Memorial']['dop_day']. "-" .$memorials['Memorial']['dop_month']. "-".$memorials['Memorial']['dop_year'],
                                               $memorials['Memorial']['city'],
                                               $memorials['Memorial']['death_cause'],
                                               $memorials['Memorial']['viewcount'],
                                               "<a href=".$this->base."/admins/viewmemorial/".$memorial_id.">View</a>",
                                               "<a href=".$this->base."/admins/editmemorial/".$memorial_id.">Edit</a>" ,
                                              );
           $sr++;
       }
       echo json_encode($show_memorial);
       exit;
    }
    
    public function showtributes() {
       $this->autoRender = false;
       $all_tributes = $this->Tribute->find('all');
       $show_tributes = array();
       $sr=0;
       foreach($all_tributes as $tributes) {
           $tribute_id = $tributes['Tribute']['id'];
           $user_id = $tributes['User']['id'];
           $user_name = $this->Usermeta->find('first',array('conditions'=>array('user_id'=>$user_id) , 'fields' => ('firstname')));
           $show_tributes['data'][$sr] = array($user_name['Usermeta']['firstname'],
                                               $tributes['Memorial']['firstname']." ".$tributes['Memorial']['lastname'],
                                               $tributes['Memorial']['dob_day']."-".$tributes['Memorial']['dob_month']."-".$tributes['Memorial']['dob_year'],
                                               $tributes['Memorial']['dop_day']."-".$tributes['Memorial']['dop_month']."-".$tributes['Memorial']['dop_year'],
                                               $tributes['Memorial']['death_cause'],
                                               $tributes['Tribute']['message'],
                                               $tributes['Tribute']['status'],
                                               $tributes['Tribute']['created'],
                                               "<a href=".$this->base."/admins/viewtribute/".$tribute_id.">View</a>",
                                               "<a href=".$this->base."/admins/edittribute/".$tribute_id.">Edit</a>" ,
                                              );
           $sr++;
       }
       echo json_encode($show_tributes);
       exit;
    }
    
    public function showgifts() {
        $this->autoRender = false;
        $all_gift = $this->Gift->find('all');
        $show_gift = array();
        $sr=0;
        foreach($all_gift as $gift) {
            $show_gift['data'][$sr] = array($gift['Gift']['title'],
                                       '<img src="'.$this->webroot.'/img/gifts/'.$gift['Gift']['image']."' width=120 height=100>",
                                       $gift['Gift']['status'], 
                                       "<a href=".$this->base."/admins/viewgift/".$gift['Gift']['id'].">View</a>",
                                       "<a href=".$this->base."/admins/editgift/".$gift['Gift']['id'].">Edit</a>" ,
                                    );
            
       }
       echo json_encode($show_gift);
       exit;
    }
}

