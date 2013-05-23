<?php
App::uses('AppModel', 'Model');
/**
 * Cnvrstnmssg Model
 *
 * @property Cnvrstn $Cnvrstn
 * @property Cnvrstnusr $Cnvrstnusr
 */
class Cnvrstnmssg extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'cnvrstnmssg';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cnvrstn' => array(
			'className' => 'Cnvrstn',
			'foreignKey' => 'cnvrstn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cnvrstnusr' => array(
			'className' => 'Cnvrstnusr',
			'foreignKey' => 'profile_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
