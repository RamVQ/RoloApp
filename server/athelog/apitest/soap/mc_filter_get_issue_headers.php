<?php

	
	$c = new SoapClient("https://roloapp.000webhostapp.com/roloapp/mantisbt/api/soap/mantisconnect.php?wsdl");
	$username = 'RamVQ';
	$password = 'fundatec';
	$project_id = '1';
	$filter_id = "user_id='1'";
	$page_number = '1';
	$per_page = '-1';
	$response=$c->mc_filter_get_issue_headers($username, $password);
	print_r($response);
	
	
?>



