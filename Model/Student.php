<?php
	
	class Student extends AppModel{
		public $ay_code = 'ay'; 
		public function getStudentInfoBox(){
			 	
		}
		public function formatData($studentData){
			$returnValue = true;
			//print_r($studentData);
			if(!is_null($studentData)){
				if(strlen($studentData['Student']['first_name']) < 2){
					$returnValue = false;
				}
				if(strlen($studentData['Student']['last_name']) < 2){
					$returnValue = false;
				}
				
				if(strlen($studentData['Student']['student_id']) < 3){
					$returnValue = false;
				}
				
			}
			
			if($returnValue){
				$dob = $studentData['Student']['dob']['month'] . $studentData['Student']['dob']['day'] . $studentData['Student']['dob']['year'];
				$studentData['Student']['dob'] = $dob;
				$ay_code = make_ay_code();
				//print_r($studentData);
				$this->save($studentData);
			}
			
			return $returnValue;
		}
		
		/*
public function make_ay_code(){
			var $theYear = date("Y");
			echo $theYear;
			
			$ay_code =. $theYear ;			
				
		}
*/
	}
?>