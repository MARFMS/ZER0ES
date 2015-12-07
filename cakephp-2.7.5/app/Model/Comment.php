<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property Snippet $Snippet
 */
class Comment extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'comment' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
		)
	);

	public $hasOne = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'id',
		 	'conditions' => '',
                        'fields' => '',
                        'order' => ''
		)
	);

	public function isOwnedBy($comment, $user) {
	    return $this->field('id', array('id' => $comment, 'user_id' => $user)) !== false;
	}
}
