<?php
class Article extends AppModel {
	var $name = 'Article';
	var $displayField = 'title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'SuperUser' => array(
			'className' => 'SuperUser',
			'foreignKey' => 'super_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>