<?php
class WaitListController extends AppController {
	
	public function index() {
	//Generation button
	
	//YET TO BE DONE: set $aycode by random generation
	//$aycode = ....
	$this->useTable = 'bentonGradeOneWaitList';
	//prototype...will need to search for specific school and grade
		$this->set('list', $this->WaitList->find('all')); 
	}
}

?>