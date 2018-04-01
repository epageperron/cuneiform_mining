<?php
App::uses('AppModel', 'Model');
/**
 * Transac Model
 *
 * @property MainAction $MainAction
 * @property Verb $Verb
 * @property MainTopic $MainTopic
 * @property Good $Good
 * @property Tablet $Tablet
 */
class Transac extends AppModel {

/**
 * Display field
 *
 * @var string
 */

	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MainAction' => array(
			'className' => 'MainAction',
			'foreignKey' => 'main_action_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Verb' => array(
			'className' => 'Verb',
			'foreignKey' => 'verb_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MainTopic' => array(
			'className' => 'MainTopic',
			'foreignKey' => 'main_topic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Good' => array(
			'className' => 'Good',
			'foreignKey' => 'good_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'joinTable' => 'tablets_transacs',
			'foreignKey' => 'transac_id',
			'associationForeignKey' => 'tablet_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
