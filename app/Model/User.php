<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	//Users model and validation for different text fields
	public $validate = array(
	'firstname' => array(
		'required' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a First name'
		)
	),
	'lastname' => array(
		'required' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a Last name'
		)
	),
	'email' => array(
		'required' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter a email'
		)
	)
);
}