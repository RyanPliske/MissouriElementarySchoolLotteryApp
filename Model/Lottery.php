<?php
class Lottery extends AppModel{

	public function getcode()
	{
		//prototype...will need to search for specific student
		$aycode = 'rtp2013';
		//get from specific table
		$this->loadmodel('aycodes'); 
		//get the aycode we want
		$result = $this->aycodes->find('first',array('conditions' => array('ay_code' => $aycode)));
		//display result
		pr($result);
	}
}
?>