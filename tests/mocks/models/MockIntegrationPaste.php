<?php

namespace app\tests\mocks\models;

class MockIntegrationPaste extends \app\models\Paste {

	/**
	* @todo remove when Model problem with adapter is fixed in core
	*/
	protected $_classes = array(
	  'query' => 'lithium\data\model\Query',
	  'record' => 'lithium\data\model\Document',
	  'validator' => 'lithium\util\Validator',
	  'recordSet' => 'lithium\data\model\Document',
	  'connections' => 'lithium\data\Connections'
	);

	protected $_meta = array(
		'key' => 'id',
		'source' => 'test_pastes',
		'connection' => 'test'
	);

	public function classes() {
		return $this->_classes;
	}
}
?>