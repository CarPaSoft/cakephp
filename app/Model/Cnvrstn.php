<?php
App::uses('AppModel', 'Model');
/**
 * Cnvrstn Model
 *
 * @property Profile $Profile
 * @property Cnvrstnmssg $Cnvrstnmssg
 * @property Cnvrstnusr $Cnvrstnusr
 */
class Cnvrstn extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cnvrstn';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'profile_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Cnvrstnmssg' => array(
			'className' => 'Cnvrstnmssg',
			'foreignKey' => 'cnvrstn_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Cnvrstnusr' => array(
			'className' => 'Cnvrstnusr',
			'foreignKey' => 'cnvrstn_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
