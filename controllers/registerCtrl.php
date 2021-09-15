<?php
require_once 'models/MainModel.php';
require_once 'models/Users.php';
require_once 'classes/Form.php';
$registerForm = new Form();

//Si j'ai bien validé le formulaire
if (isset($_POST['register'])) {
    $pseudo = '';
    $lastname = '';
    $mail = '';
    $birthdate = '';
    $plainPassword = '';
    //Je récupère les données du formulaire
    if (isset($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
    }
    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname'];
    }
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];
    }
    if (isset($_POST['birthdate'])) {
        $birthdate = $_POST['birthdate'];
    }
    if (isset($_POST['mail'])) {
        $mail = $_POST['mail'];
    }
    if (isset($_POST['password'])) {
        $plainPassword = $_POST['password'];
    }

    //Je vérifie le pseudo
    $registerForm->isNotEmpty('pseudo', $pseudo);
    $registerForm->isValidFormat('pseudo', $pseudo, FORM::ALPHA_NUMERIC);
    $registerForm->isUnique('pseudo', $pseudo, 'users');
    $registerForm->isValidLength('pseudo', $pseudo, 3, 50);
    //Je vérifie le nom 
    $registerForm->isNotEmpty('lastname', $lastname);
    $registerForm->isValidName('lastname', $lastname, FORM::REGEX_NAME);
    $registerForm->isValidLength('lastname', $lastname, 3, 50);
    // Je vérifie le prénom 
    $registerForm->isNotEmpty('firstname', $firstname);
    $registerForm->isValidFormat('firstname', $firstname, FORM::REGEX_NAME);
    //Je vérifie le mail
    $registerForm->isNotEmpty('mail', $mail);
    $registerForm->isValidEmail('mail', $mail);
    $registerForm->isUnique('mail', $mail, 'users');
    //Je vérifie le mot de passe
    $registerForm->isNotEmpty('password', $plainPassword);
    $registerForm->isValidLength('password', $plainPassword, 6, 255);

    //Si il n'y a pas d'erreur sur le formulaire
    if ($registerForm->isValid()) {
        $user = new Users();
        $user->__set('pseudo', $pseudo);
        $user->__set('lastname', $lastname);
        $user->__set('firstname', $firstname);
        $user->__set('birthdate', $birthdate);
        //Je hash le mot de passe
        $hashPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
        $user->__set('password_hash', $hashPassword);
        $user->__set('mail', $mail);
        $user->__set('hash', Str::getRandomString(60));
        if ($user->addUser() != 0) {
            echo 'Votre profil a bien été enregistré';
        }
    }
}
