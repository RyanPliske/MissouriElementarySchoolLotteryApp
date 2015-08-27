<?php $this->extend('/StudentApplicationForm/index'); ?>
	
<h4>Student Information</h4>

<?php 
	echo $this->Form->input('first_name'); 
	echo $this->Form->input('last_name');
	echo $this->Form->input('student_id', array('type' => 'text')); 
	echo $this->Form->input('dob', array('type' => 'date')); 
?>