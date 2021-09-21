<?php
require_once 'models/MainModel.php';
require_once 'models/Users.php';
require_once 'models/Role.php';
require_once 'models/Strongfoot.php';
require_once 'models/Languages_spoken.php';
require_once 'models/Position.php';
require_once 'models/Countries.php';
require_once 'models/Nationality.php';
require_once 'models/Style.php';
require_once 'classes/Form.php';
require_once 'classes/str.php';

$registerForm = new Form();


//Contrôle du formulaire Coordonnées
if (isset($_POST['UpdateContactDetails'])) {
    $pseudo = '';
    $lastname = '';
    $mail = '';
    $birthdate = '';
    //Je récupère les données du formulaire
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

    if ($registerForm->isValid()) {
        $user = new Users();
        $user->__set('lastname', $lastname);
        $user->__set('firstname', $firstname);
        $user->__set('birthdate', $birthdate);
        $user->__set('mail', $mail);
        if ($user->updateProfile() != 0) {
            $userCreated = 'Vos coordonnées ont bien été modifié';
        }
    }
}

//Contrôle du formulaire Informations
if (isset($_POST['UpdateUserInfo'])) {
    $pseudo = '';
    $description = '';
    //Je récupère les données du formulaire
    if (isset($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
    }
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    }

    //Je vérifie le pseudo
    $registerForm->isNotEmpty('pseudo', $pseudo);
    $registerForm->isValidFormat('pseudo', $pseudo, FORM::ALPHA_NUMERIC);
    $registerForm->isUnique('pseudo', $pseudo, 'users');
    $registerForm->isValidLength('pseudo', $pseudo, 3, 50);

    if ($registerForm->isValid()) {
        $user = new Users();
        $user->__set('pseudo', $pseudo);
        $user->__set('description', $description);
        if ($user->updateProfile() != 0) {
            $userCreated = 'Vos informations ont bien été modifié';
        }
    }
}

//Contrôle du formulaire Caracteristiques
if (isset($_POST['UpdateCharacteristics'])) {
    $weight = '';
    $height = '';
    $footprefered = '';
    $spokenLanguages = '';

    //Je récupère les données du formulaire
    if (isset($_POST['weight'])) {
        $weight = $_POST['weight'];
    }
    if (isset($_POST['height'])) {
        $height = $_POST['height'];
    }
    if (isset($_POST['footprefered'])) {
        $footprefered = $_POST['footprefered'];
    }

    //Je vérifie le pseudo
    $registerForm->isNotEmpty('pseudo', $pseudo);
    $registerForm->isValidFormat('pseudo', $pseudo, FORM::ALPHA_NUMERIC);
    $registerForm->isUnique('pseudo', $pseudo, 'users');
    $registerForm->isValidLength('pseudo', $pseudo, 3, 50);

    if ($registerForm->isValid()) {
        $user = new Users();
        $user->__set('pseudo', $pseudo);
        $user->__set('description', $description);
        if ($user->updateProfile() != 0) {
            $userCreated = 'Vos informations ont bien été modifié';
        }
    }
}

$strongFoot = new Strongfoot();
$footPrefered = $strongFoot->getFootPrefered();

$languages = new spokenLanguages();
$spokenLanguages = $languages->getLanguagesSpoken();

$countries = new Countries();
$CountriesList = $countries->getCountriesList();

$style = new Style();
$stylePlayerList = $style->getStyleUser();

$position = new Position();
$positionList = $position->getPosition();

$nationality = new Nationality();
$nationalityList = $nationality->getNationality();
