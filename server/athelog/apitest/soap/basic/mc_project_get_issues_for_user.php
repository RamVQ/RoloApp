<?php

//to recover all the tickets reported by this user
	
	$c = new SoapClient("https://roloapp.000webhostapp.com/roloapp/mantisbt/api/soap/mantisconnect.php?wsdl");
	$username = 'RamVQ';
	$password = 'fundatec';
	$project_id = '0';//"0" for all projects
	$filter_type = "reported";
	$page_number = '1';
	$per_page = '-1';//"-1" default value
	$target_user  = array(
    		"name" => "RamVQ"
);

	$response=$c->mc_project_get_issues_for_user($username, $password,$project_id,$filter_type,$target_user,$page_number,$per_page);
	print_r($response);
	
	
?>

