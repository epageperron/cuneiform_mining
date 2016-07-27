<?php
App::uses('AppModel', 'Model');
/**
 * SignType Model
 *
 * @property Sign $Sign
 */
class SignType extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'sign_type';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sign_type' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Sign' => array(
			'className' => 'Sign',
			'foreignKey' => 'sign_type_id',
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
