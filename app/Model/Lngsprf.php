<?php
App::uses('AppModel', 'Model');
/**
 * Lngsprf Model
 *
 * @property Language $Language
 * @property Profile $Profile
 */
class Lngsprf extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'lngsprfs';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'profile_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'level';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Language' => array(
			'className' => 'Language',
			'foreignKey' => 'language_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'profile_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
