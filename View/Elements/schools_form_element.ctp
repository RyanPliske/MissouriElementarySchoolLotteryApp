<!-- Schools Element -->
<div id="school_selection"> 
<h4>Schools</h4>
	<?php
		$schools = $this->requestAction('/schools/index');
		print_r($schools);
		for($i = 0; $i < sizeof($schools);$i++){			
			echo $this->Form->input('schools', array(
				'options' => array('name' => 'schools', 'class' => $schools[$i]['application_level'], 'onclick' => 'show_student_info_box()', 'type' => 'radio'));	

		}
	?>
</div>
<!-- End Schools Element -->