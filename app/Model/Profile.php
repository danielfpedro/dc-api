<?php
App::uses('AppModel', 'Model');
/**
 * Profile Model
 *
 * @property Account $Account
 */
class Profile extends AppModel {

	public $actsAs = array('Containable');

	public function getPotencialPartner($id = null, $limit){
		//Primeiro ve todas as combinações aonde alguem já respondeu alguma coisa a respeito dele e ainda falta a replica
		$options = [];
		$ids = [];
		$waiting = [];

		$options['fields'] = ['account_id'];
		$options['conditions'] = ['Relationship.account_id2'=> $id, 'Relationship.response2'=> null];
		$options['recursive'] = -1;
		$waiting_ids = $this->Account->Relationship->find('all', $options);
		//Make an array of ids;
		if (!empty($waiting_ids)) {
			foreach ($waiting_ids as $row) {
				$ids[] = $row['Relationship']['account_id'];
			}
		}
		// Debugger::dump($ids);
		// exit();

		$options = [];
		$total = 0;
		//Get based on relationship users waiting response
		$options['recursive'] = -1;
		if (!empty($ids)){
			$options['conditions'] = ['Profile.account_id'=> $ids];
			$options['limit'] = $limit;

			$waiting = $this->find('all', $options);
			$total = count($waiting);
		}
		// Debugger::dump($waiting);
		// exit();		

		$limit = $limit - $total;
		if ($limit > 0) {
			$options['limit'] = $limit;
			$ids[] = $id;
			$options['conditions'] = ['Profile.account_id !='=> $ids];
			$options['order'] = 'rand()';
			$random = $this->find('all', $options);
		}
		$result = array_merge($waiting, $random);
		Debugger::dump($result);
		exit();
		return $result;
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bio' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'birth_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'image_folder' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'account_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
