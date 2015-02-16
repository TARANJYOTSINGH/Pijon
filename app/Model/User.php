<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
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