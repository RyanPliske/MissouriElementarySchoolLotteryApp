<?php
	$this->extend('/StudentApplicationForms/index');
	$this->start('grade_input');
?>
<!-- Grade index.ctp -->
<h4>Grade</h4>
<div id="grade_selection">
<?php
	//pr($grades);
	
	for($i = 0; $i < sizeof($grades);$i++){
		echo $this->Form->input('grade', array(
	   'options' => array($grades[$i]['Grade']['id'] => $grades[$i]['Grade']['name']), 'onclick' => 'showSchools('.$grades[$i]['Grade']['id'].')' /* array(0=>'Kindergarten', 1=>'First', 2=>'Second', 3=>'Third', 4=>'Fourth', 5=>'Fifth') */,
	   //'empty' => '(choose one)',
	   'type' => 'radio'));
	}
?>
</div>
<!-- End Grade index.ctp -->
<?php
	$this->end('grade_input');
?>