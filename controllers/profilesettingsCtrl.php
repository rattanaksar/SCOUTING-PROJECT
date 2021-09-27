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

$updateForm = new Form();
$updateArray = '';

//Contrôle du formulaire Coordonnées
if (isset($_POST['UpdateContactDetails'])) {
    //Je récupère les données du formulaire
    if (isset($_POST['updatePseudo'])) {
        $updatePseudo = htmlspecialchars($_POST['updatePseudo']);
        //Je vérifie le pseudo
        $updateForm->isNotEmpty('pseudo', $updatePseudo);
        $updateForm->isValidLength('pseudo', $updatePseudo, 3, 20);
        if (!isset($updateForm->error['pseudo'])) {
            $updateArray['pseudo'] = $updatePseudo;
        } else {
            $updateForm->error['pseudo'];
        }
    }
}
if (isset($_POST['updateLastname'])) {
    $updateLastname = htmlspecialchars($_POST['updateLastname']);
    $updateForm->isNotEmpty('lastname', $updateLastname);
    if (!isset($updateForm->error['lastname'])) {
        $updateArray['lastname'] = $updateLastname;
    } else {
        $updateForm->error['lastname'];
    }
}
if (isset($_POST['updateFirstname'])) {
    $updateFirstname = htmlspecialchars($_POST['updateFirstname']);
    $updateForm->isNotEmpty('firstname', $updateFirstname);
    if (!isset($updateForm->error['firstname'])) {
        $updateArray['firstname'] = $updateFirstname;
    } else {
        $updateForm->error['firstname'];
    }
}
if (isset($_POST['updateMail'])) {
    $updateMail = htmlspecialchars($_POST['updateMail']);
    $updateForm->isNotEmpty('mail', $updateMai);
    if (!isset($updateForm->error['mail'])) {
        $updateArray['mail'] = $updateMail;
    } else {
        $updateForm->error['mail'];
    }
}

if (isset($_POST['updateBirthdate'])) {
    $updateBirthdate = htmlspecialchars($_POST['updateBirthdate']);
    //Je vérifie la date de naissance
    $updateForm->isNotEmpty('birthdate', $updateBirthdate);
    if (!isset($updateForm->error['birthdate'])) {
        $updateArray['birthdate'] = $updateBirthdate;
    } else {
        $updateForm->error['birthdate'];
    }
}
if (!empty($updateArray)) {
    // je modifie les attributs de la classe grâce au setter
    $user->__set('id', $_SESSION['user']['id']);
    $user->__set('pseudo', $updateArray['pseudo']);
    $user->__set('lastname', $updateArray['lastname']);
    $user->__set('firstname', $updateArray['firstname']);
    $user->__set('birthdate', $updateArray['birthdate']);
    $user->__set('mail', $updateArray['mail']);
    // ici j'exécute la méthodes updateUserInfo() de l'objet $user, j'y récupère les modifications stockées dans le tableau $updateArray
    $isUpdated = $user->updateProfile($updateArray);
    if ($isUpdated) {
        // ici, je mets à jour les informations, visuellement, sur le profil de l'utilisateur en passant par les variables de session
        $_SESSION['user']['pseudo'] = $updateArray['pseudo'];
        $_SESSION['user']['lastname'] = $updateArray['lastname'];
        $_SESSION['user']['firstname'] = $updateArray['firstname'];
        $_SESSION['user']['birthdate'] = $updateArray['birthdate'];
        $_SESSION['user']['mail'] = $updateArray['mail'];
        // si tout est ok, je redirige l'utilisateur vers sa page de profil
        header('Location: ./views/profile.php');
    } else {
        $message = implode($updateForm->error);
        var_dump($message);
    }
}

if (isset($_POST['deleteAccount'])) {
    // on vérifie  que l'ID de l'utilisateur a bien été récupéré dans l'URL
    if (isset($_GET['userID'])) {
        $user->id = htmlspecialchars($_GET['userID']);
        $deleteProfile = $user->deleteProfile();
        // si tout est ok, on redirige vers la page d'accueil
        header('Location: index.php');
    } else {
        $message = 'Une erreur est survenue.';
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

$user = new Users();
if (isset($_GET['userId'])) {
    $user->__set('id', $_GET['userId']);
}
$isFind = $user->getUserInfoById();
