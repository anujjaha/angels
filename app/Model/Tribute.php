<?php
App::uses('AppModel', 'Model');
/**
 * Tribute Model
 *
 */
class Tribute extends AppModel {
    public $belongsTo = array('User','Memorial');
}
