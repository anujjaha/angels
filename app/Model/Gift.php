<?php
App::uses('AppModel', 'Model');
/**
 * Gift Model
 *
 */
class Gift extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
        public $belongsTo = array('User');
}
