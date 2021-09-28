<?php
require_once 'models/MainModel.php';
require_once 'models/Users.php';
require_once 'models/Role.php';
require_once 'classes/Form.php';
require_once 'classes/str.php';

$registerForm = new Form();
$loginForm = new Form();
$message = '';

//Si j'ai bien validé le formulaire
if (isset($_POST['register'])) {
    $pseudo = '';
    $lastname = '';
    $firtstname = '';
    $mail = '';
    $birthdate = '';
    $password = '';
    $role = 0;
    //Je récupère les données du formulaire
    if (isset($_POST['pseudo'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $registerForm->isNotEmpty('pseudo', $pseudo);
        $registerForm->isValidFormat('pseudo', $pseudo, FORM::ALPHA_NUMERIC);
        $registerForm->isUnique('pseudo', $pseudo, 'users');
        $registerForm->isValidLength('pseudo', $pseudo, 3, 50);
    } else {
        $registerForm->error['pseudo'];
    }
    if (isset($_POST['lastname'])) {
        $lastname = htmlspecialchars($_POST['lastname']);
        $registerForm->isNotEmpty('lastname', $lastname);
        $registerForm->isValidName('lastname', $lastname, FORM::REGEX_NAME);
        $registerForm->isValidLength('lastname', $lastname, 3, 50);
    } else {
        $registerForm->error['lastname'];
    }
    if (isset($_POST['firstname'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
        $registerForm->isNotEmpty('firstname', $firstname);
        $registerForm->isValidName('firstname', $firstname, FORM::REGEX_NAME);
        $registerForm->isValidLength('firstname', $firstname, 3, 50);
    } else {
        $registerForm->error['firstname'];
    }
    if (isset($_POST['birthdate'])) {
        $birthdate = $_POST['birthdate'];
    }
    if (isset($_POST['mail'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $registerForm->isNotEmpty('mail', $mail);
        $registerForm->isValidEmail('mail', $mail);
        $registerForm->isUnique('mail', $mail, 'users');
    } else {
        $registerForm->error['mail'];
    }
    if (isset($_POST['role'])) {
        $role = $_POST['role'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $registerForm->isNotEmpty('password', $password);
        $registerForm->isValidLength('password', $password, 6, 255);
    } else {
        $registerForm->error['mail'];
    }

    if ($registerForm->isValid()) {
        $user = new Users();
        $user->__set('pseudo', $pseudo);
        $user->__set('lastname', $lastname);
        $user->__set('firstname', $firstname);
        $user->__set('birthdate', $birthdate);
        //Je hash le mot de passe
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $user->__set('password_hash', $hashPassword);
        $user->__set('mail', $mail);
        $user->__set('id_roles', $role);
        $user->__set('hash', str::getRandomString(50));
        if ($user->addUser()) {
            $message = 'Votre compte a bien été crée! Vous pouvez vous connecter.';
        }
    } else {
        $message = 'Votre compte n a pas ete créé';
    }
}

$role = new Role();
$roleUsers = $role->getRoleUser();
