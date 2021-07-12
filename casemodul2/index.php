<?php
require __DIR__ . "/vendor/autoload.php";

use App\Controller\Chanel\UserController;

$dbconnect = new \App\Model\DBConnect();

$userControl = new UserController();
$page = '';
if(isset($_POST['submit'])){
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
    $data = $_POST;
    $userControl->createUser($data);
}

if(isset($_POST['login'])){
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
    $data = $_POST;
    $userControl->login($data);
}



?>