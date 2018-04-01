<?php
App::uses('AppModel', 'Model');
/**
 * MainTopic Model
 *
 * @property Transac $Transac
 */
class MainTopic extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'main_topic';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Transac' => array(
			'className' => 'Transac',
			'foreignKey' => 'main_topic_id',
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
