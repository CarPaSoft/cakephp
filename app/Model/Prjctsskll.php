<?php
App::uses('AppModel', 'Model');
/**
 * Prjctsskll Model
 *
 * @property Project $Project
 * @property Skill $Skill
 */
class Prjctsskll extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Skill' => array(
			'className' => 'Skill',
			'foreignKey' => 'skill_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
