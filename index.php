<h1>Trang chủ</h1>
<a href="/index.php?url=listTeacher">List Teacher</a>
<a href="/index.php?url=editTeacher">Edit Teacher</a>
<?php
require './vendor/autoload.php';

use Huuhu\Huynh01410\models\Router;
use Huuhu\Huynh01410\controllers\TeacherController;

$router = new Router();
$router->get('listTeacher', [new TeacherController(), 'getTeacher']);

if (isset($_GET['url'])) {
    $url = $_GET['url'];
} else {
    $url = '/index.php';
    echo 'Vui long chon chuc nang...';
}
$method = $_SERVER['REQUEST_METHOD'];
$router->handleRoute($url, $method);
?>


