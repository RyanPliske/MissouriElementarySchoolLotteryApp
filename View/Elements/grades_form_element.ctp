<!-- Grades element -->
<div id="grade_selection">
<?php
	//$this->extend('/StudentApplicationForms/index');
	$grades = $this->requestAction('grades/index');
	//$this->start('grade_input');
?>
<h4>Grade</h4>
<?php
	for($i = 0; $i < sizeof($grades);$i++){
		echo $this->Form->input('grade', array(
	   'options' => array($grades[$i]['Grade']['id'] => $grades[$i]['Grade']['name']), 'onclick' => 'showSchools('.$grades[$i]['Grade']['id'].')' /* array(0=>'Kindergarten', 1=>'First', 2=>'Second', 3=>'Third', 4=>'Fourth', 5=>'Fifth') */,
	   //'empty' => '(choose one)',
	   'type' => 'radio'));
	}
?>
</div>
<?php
	//$this->end('grade_input');
?>
<!-- End Grades element -->