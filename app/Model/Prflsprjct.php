<?php
App::uses('AppModel', 'Model');
/**
 * Prflsprjct Model
 *
 * @property Profile $Profile
 * @property Project $Project
 */
class Prflsprjct extends AppModel {


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
