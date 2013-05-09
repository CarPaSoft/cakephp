<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property Lngsprjct $Lngsprjct
 * @property Prflsprjct $Prflsprjct
 * @property Prjctsskll $Prjctsskll
 */
class Project extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Lngsprjct' => array(
			'className' => 'Lngsprjct',
			'foreignKey' => 'project_id',
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
		'Prflsprjct' => array(
			'className' => 'Prflsprjct',
			'foreignKey' => 'project_id',
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
		'Prjctsskll' => array(
			'className' => 'Prjctsskll',
			'foreignKey' => 'project_id',
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
