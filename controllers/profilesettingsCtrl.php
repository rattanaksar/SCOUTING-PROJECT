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
$updateArray = [];
$user = new Users();


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
if (isset($_POST['updateWeight'])) {
    $updateWeight = htmlspecialchars($_POST['updateWeight']);
    $updateForm->isNotEmpty('weight', $updateWeight);
    if (!isset($updateForm->error['weight'])) {
        $updateArray['weight'] = $updateWeight;
    } else {
        $updateForm->error['weight'];
    }
}
if (isset($_POST['updateHeight'])) {
    $updateHeight = htmlspecialchars($_POST['updateHeight']);
    $updateForm->isNotEmpty('height', $updateHeight);
    if (!isset($updateForm->error['height'])) {
        $updateArray['height'] = $updateHeight;
    } else {
        $updateForm->error['height'];
    }
}
if (isset($_POST['updateMail'])) {
    $updateMail = htmlspecialchars($_POST['updateMail']);
    $updateForm->isNotEmpty('mail', $updateMail);
    if (!isset($updateForm->error['mail'])) {
        $updateArray['mail'] = $updateMail;
    } else {
        $updateForm->error['mail'];
    }
}
if (!empty($updateArray)) {
    // je modifie les attributs de la classe grâce au setter
    $user->__set('id', $_SESSION['user']['id']);
    $user->__set('pseudo', $updateArray['pseudo']);
    $user->__set('lastname', $updateArray['lastname']);
    $user->__set('firstname', $updateArray['firstname']);
    $user->__set('birthdate', $updateArray['birthdate']);
    $user->__set('height', $updateArray['height']);
    $user->__set('weight', $updateArray['weight']);
    $user->__set('mail', $updateArray['mail']);
    // Execution de la méthode updateProfile() de l'objet $user, et récupèration les modifications stockées dans le tableau $updateArray
    $isUpdated = $user->updateProfile($updateArray);
    if ($isUpdated) {
        // Mise à jour des informations puis je les passe dans les variables de session
        $_SESSION['user']['pseudo'] = $updateArray['pseudo'];
        $_SESSION['user']['lastname'] = $updateArray['lastname'];
        $_SESSION['user']['firstname'] = $updateArray['firstname'];
        $_SESSION['user']['birthdate'] = $updateArray['birthdate'];
        $_SESSION['user']['weight'] = $updateArray['weight'];
        $_SESSION['user']['height'] = $updateArray['height'];
        $_SESSION['user']['mail'] = $updateArray['mail'];
    } else {
        $message = "La modification n'a pas été prise en compte";
    }
}

if (isset($_POST['deleteAccount'])) {
    // Je récupère l'ID de User via $_SESSION
    if (isset($_SESSION['user']['id'])) {
        $user = new Users();
        $hash = $user->getUserHashDelete();
        $confirmationPassword = (isset($_POST['ConfirmationPassword']) ? $_POST['ConfirmationPassword'] : '');
        if (password_verify($confirmationPassword, $hash)) {
            $deleteProfile = $user->deleteProfile();
            session_destroy();
            header('Location: index.php');
        }
        // si tout est ok, on redirige vers la page d'accueil
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
