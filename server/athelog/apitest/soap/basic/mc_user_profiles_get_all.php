<?php

$c = new SoapClient("https://roloapp.000webhostapp.com/roloapp/mantisbt/api/soap/mantisconnect.php?wsdl");
$username = 'administrator';
$password = 'root';
$page_number = '1';
$per_page = '1';
$response=$c->mc_user_profiles_get_all($username, $password,$page_number,$per_page);
//$response=$c->mc_user_profiles_get_all($username, $password,$page_number,$per_page);

print_r($response);

?>