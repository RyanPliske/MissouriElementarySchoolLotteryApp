<?php
class AycodeController extends AppController {
	
	public function index() {
	//Generation button
	
	//YET TO BE DONE: set $aycode by random generation
	//$aycode = ....
	
	//prototype...will need to search for specific student
		$aycode = 'rtp2013';
		$this->set('aycodes', $this->Aycode->find('first',array('conditions' => array('ay_code' => $aycode))));
	}
}

?>