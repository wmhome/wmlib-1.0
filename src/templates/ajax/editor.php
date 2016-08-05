<?php

	$data = array(
		'JavaScript','ActionScript','PHP','Ajax','Java','Basic','Loading','Grid','Test','Record','Another','Display'
	);

	if($_GET['val']) {
		
		$val = strtolower($_GET['val']);
		
		$output = array();
		foreach($data as $row) {
			if (strpos(strtolower($row), $val) !== false) {
				$output[] = $row;
			}
		}
		echo json_encode($output);
	}
	
?>