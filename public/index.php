<?php 
echo "<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>";
echo	"<link rel='stylesheet' type='text/css' href='css/style.css'>";

//var_dump(__DIR__);//string 'C:\xampp\htdocs\wpa15\phonedir\public' (length=37)
//Part1
define('DD', __DIR__ . '/../');//DD asign var,/../ mean decrease root directory
require DD . 'wpa15/application.php';
require DD . 'app/controllerloader.php';

isset($_GET['page']) ? $page =$_GET['page'] : $page = 'home';

$routes = include DD . 'app/routes.php';

$found = -1;

foreach ($routes as $key => $value) {
	if ($page == $value['_route']) {
		$found = $key;
	}
}

if ($found == -1) {
	echo "404 not Found";
} 
else
{
	call_user_func($routes[$found]['_controller']);
}	

 ?>