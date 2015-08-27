<?php
	class School extends AppModel{
		public function getSchools(){
			$schools = $this->find('all');
			
			return $schools; 
		}
	}
?>