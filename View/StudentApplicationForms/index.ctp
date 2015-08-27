<h2>Lottery School Application</h2>
<div id="application_form">
<?php
	echo $this->Html->css('form.css?'.filemtime('style.css'));
	echo $this->Html->script('form');
	echo $this->Form->create('StudentApplicationForms', array('type' => 'file', 'action' => 'add'));
	//echo $this->fetch('grade_input');
	echo $this->element('grades_form_element');
	echo $this->element('schools_form_element');
	echo $this->element('student_form_element');
	
	//echo $this->fetch('school_input');
	
	//echo $submit;

	
	//echo $this->Form->end('Submit');
		//echo $this->Html->link('Next', array('controller' => 'schools', 'action' => 'index'));
	//}
	
	echo $this->Form->end('Apply');
	

?>

</div>