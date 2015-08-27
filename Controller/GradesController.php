<?php
	class GradesController extends AppController{
		
		public function index(){
			//Gets all the rows in the grade table and stores it into a variable called grade. 
			//$grades = $this->Grade->find('all'); 
			$grades = $this->Grade->getGrades();
			//Prints the grades variable so you see how the array is setup for returning the table information.
			//pr($grades); 
			
			//Returns the $grades variable when it is requested. 
			if($this->request->is('requested')){
				return $grades;
			}
			
			//Sends the $grades variable to the view file. The string 'grades' is the name of the variable that the Grades View file will have the same setup as the $grades.
			$this->set('grades', $grades);
			
			
			
		}
	}

?>