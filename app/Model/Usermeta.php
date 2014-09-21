<?php
App::uses('AppModel', 'Model');
/**
 * Usermeta Model
 *
 */
class Usermeta extends AppModel {
    public $belongTo = array('User');
}
