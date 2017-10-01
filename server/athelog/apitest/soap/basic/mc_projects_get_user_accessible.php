<?php
$c = new SoapClient("https://roloapp.000webhostapp.com/roloapp/mantisbt/api/soap/mantisconnect.php?wsdl");
$username = 'administrator';
$password = 'root';
$response=$c->mc_projects_get_user_accessible($username, $password);
print_r($response);
?>