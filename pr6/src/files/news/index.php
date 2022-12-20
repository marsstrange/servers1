<?php
/*http://user1:cisco@localhost/files/news/index.php/posts*/

#чтобы получить данные с одного домена на другой, другие пользователи смогут обращаться к api
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');

header('Content-type: application/json'); //указываем, что результат запроса возвращается в формате JSON
require 'functions.php';


$method = $_SERVER['REQUEST_METHOD'];


$mysqli = new mysqli("database", "user", "password", "userDB");

$q = $_GET['q']; //$_GET, $_POST — суперглобальные переменные 

$params = explode('/', $q);

$type = $params[0];
$id = $params[1];

switch ($method) {
	case 'GET':
		if ($type == 'posts')
			if (isset($id))
				getPost($mysqli, $id);
			else 
				getPosts($mysqli);
		break;
	case 'POST':
		if ($type == 'posts')
			$data = file_get_contents('php://input');
			$data = json_decode($data, true);
			/*addPost($mysqli, $_POST);*/
			addPost($mysqli, $data);
		break;
	case 'PATCH':
		if ($type == 'posts')
			if (isset($id)) {
				$data = file_get_contents('php://input');
				$data = json_decode($data, true);
				updatePost($mysqli, $id, $data);
			}
			else {
				http_response_code(400); 
			}
		break;

	case 'DELETE':
		if ($type === 'posts')
			if (isset($id)) {
				deletePost($mysqli, $id, $data);
			}
		break;

	default:
		break;
}

?>


