<?php
require_once 'models/MainModel.php';
require_once 'models/Users.php';
//Si l'utilisateur n'est pas connecté on le redirige vers la page de connexion
if (!isConnected()) {
    header('Location: index.php?page=login');
    exit;
}

$pseudo = isset($_SESSION['user']['pseudo']) ? $_SESSION['user']['pseudo'] : '';
$lastname = isset($_SESSION['user']['lastname']) ? $_SESSION['user']['lastname'] : '';
$firstname = isset($_SESSION['user']['firstname']) ? $_SESSION['user']['firstname'] : '';
$birthdate = isset($_SESSION['user']['birthdate']) ? $_SESSION['user']['birthdate'] : '';
$mail = isset($_SESSION['user']['mail']) ? $_SESSION['user']['mail'] : '';

$user = new Users();
if (isset($_GET['userId'])) {
    $user->id = $_GET['userId'];
}

$isFind = $user->getUserInfoById();
