<?php
App::uses('AppModel', 'Model');
/**
 * Lngsprjct Model
 *
 * @property Language $Language
 * @property Project $Project
 */
class Lngsprjct extends AppModel {

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
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
