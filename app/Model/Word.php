<?php
class Word extends AppModel {
public $name = 'Word';
public $displayField = 'word';
public $actsAs = array('Searchable','ExtendAssociations', 'Containable');
public $validate = array('word' => array('rule' => 'notEmpty'));

var $hasAndBelongsToMany = array(
'WordType' =>
array(
'className'              => 'WordType',
'joinTable'              => 'words_word_types',
'foreignKey'             => 'word_id',
'associationForeignKey'  => 'word_type_id',
),
'Term' =>
array(
'className'              => 'Term',
'joinTable'              => 'terms_words',
'foreignKey'             => 'word_id',
'associationForeignKey'  => 'term_id',
));
}
