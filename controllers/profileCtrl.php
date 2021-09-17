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

// On contrôle les informations modifiées

$errors = array();
if (count($_POST) > 0) {

    if (!empty($_POST['lastname'])) {
        $user->lastname = $_POST['lastname'];
    } else {
        $errors['lastname'] = 'Veuillez renseigner votre nom';
    }

    if (!empty($_POST['firstname'])) {
        $user->firstname = $_POST['firstname'];
    } else {
        $errors['firstname'] = 'Veuillez renseigner votre prénom';
    }

    if (!empty($_POST['birthdate'])) {
        $user->birthdate = $_POST['birthdate'];
    } else {
        $errors['birthdate'] = 'Veuillez renseigner votre date de naissance';
    }
    if (count($errors) == 0) {
        $user->updateUserInfo();
    }
}
