$c = new SoapClient("https://roloapp.000webhostapp.com/roloapp/mantisbt/api/soap/mantisconnect.php?wsdl");
$username = 'administrator';
$password = 'root';
$page_number = '10';
$per_page = '10';
$c->mc_user_profiles_get_all($username, $password,$page_number,$per_page);