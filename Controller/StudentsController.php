<?php
	class StudentsController extends AppController{
		
		public function index(){
			//$students = $this->Student->find('all'); 	
			//$this->set('students', $students);
			
			if($this->request->is('post')){
				$informationWasEntered = $this->Student->formatData($this->request->data);
				
				if($informationWasEntered){
					echo("Information was saved!");
				}else{
					echo("LIES!");
				}
			}
		}
		
		public function add(){
			$students = $this->Student->find('all');
			
			if($this->request->is('requested')){
				return $students;
			}
			/*
if($this->request->is('post')){
				$informationWasEntered = $this->Student->formatData($this->request->data);
				
				if($informationWasEntered){
					echo("Information was saved!");
				}else{
					echo("LIES!");
				}
			}
*/
		}
	}

?>