<?php
require_once 'models/MainModel.php';
require_once 'models/Users.php';

$user = new Users();
if (isset($_GET['userId'])) {
    $user->__set('id', $_GET['userId']);
}
$isFind = $user->getUserInfoById();
