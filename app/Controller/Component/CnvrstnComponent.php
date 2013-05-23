<?php
App::uses('Component', 'Controller');
class CnvrstnComponent extends Component {
	/*public function doComplexOperation($amount1, $amount2) {
		return $amount1 + $amount2;
	}*/
	public function __construct($collection)
	{
		$this->Cnvrstn = ClassRegistry::init('Cnvrstn');
		
	}
	
	
}