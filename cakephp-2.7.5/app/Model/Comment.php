<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property Snippet $Snippet
 * @property User $User
 */
class Comment extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Snippet' => array(
			'className' => 'Snippet',
			'foreignKey' => 'snippet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
