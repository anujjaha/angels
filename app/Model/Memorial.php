<?php
App::uses('AppModel', 'Model');
/**
 * Memorial Model
 *
 */
class Memorial extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
        public $belongsTo = 'User';
        public $hasMany = 'Tribute';
}
