<?php 
	class Grade extends AppModel{
		public $application_level = -1;
		
		public function getGrades(){
			$grades = $this->find('all'); 
			
			return $grades;
		}
	}

?>