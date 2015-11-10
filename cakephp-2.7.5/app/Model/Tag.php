<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property Snippet $Snippet
 */
class Tag extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tag';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'snippet_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tag' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
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
}
