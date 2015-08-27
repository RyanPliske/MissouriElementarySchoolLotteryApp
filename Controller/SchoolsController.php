<?php
	class SchoolsController extends AppController{
		public function index(){
			$schools = $this->School->getSchools();
			
			if($this->request->is('requested')){
				return $schools;
			}
			//$grades = ClassRegistry::init('Grade')->getGrades();
			
			$this->set('schools', $schools);
		}
	}
?>