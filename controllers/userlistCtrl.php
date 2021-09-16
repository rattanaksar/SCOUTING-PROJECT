<?php
require_once 'models/MainModel.php';
require_once 'models/Users.php';
$user = new Users();
if (isset($_GET['userId'])) {
    $user->id = $_GET['userId'];
}
$usersList = $user->getUsersList();
