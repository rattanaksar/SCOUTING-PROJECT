<?php
$script = '';
$css = '';
//Je vérifie la page demandée
if (!empty($_GET['view'])) {
    //Dans le cas où la page demandée est la page d'inscription
    if ($_GET['view'] == 'register') {
        $view = 'register';
        $css = '<link rel="stylesheet" href="./assets/css/style.css">';
    } else if ($_GET['view'] == 'login') {
        $view = 'login';
        $css = '<link rel="stylesheet" href="./assets/css/style.css">';
    } else if ($_GET['view'] == 'profile') {
        $view = 'profile';
        $css = '<link rel="stylesheet" href="./assets/css/profile.css">';
    } else if ($_GET['view'] == 'userlist') {
        $view = 'userlist';
        $css = '<link rel="stylesheet" href="./assets/css/userlist.css">';
    } else if ($_GET['view'] == 'userprofile') {
        $view = 'userprofile';
        $css = '<link rel="stylesheet" href="./assets/css/profile.css">';
    } else if ($_GET['view'] == 'updateprofile') {
        $view = 'updateprofile';
        $css = '<link rel="stylesheet" href="./assets/css/updateprofile.css">';
    }
} else { //Dans le cas où il n'y a pas de page demandée
    $view = 'home';
    $css = '<link rel="stylesheet" href="./assets/css/home.css">';
}

if (!empty($_GET['module'])) {
    if ($_GET['module'] == 'admin') {
        $module = 'admin/';
    }
} else {
    $module = '';
}

/**
 * Permet de savoir si l'utilisateur à le niveau d'accès nécessaire pour accéder à la page
 *
 * @param [int] $levelMin
 * @return void
 */
function authorizedAccess($levelMin)
{
    if (!isset($_SESSION['user']['isConnected']) || !$_SESSION['user']['isConnected'] || $_SESSION['user']['levelAccess'] < $levelMin) {
        header('Location: index.php');
        exit;
    }
}
/**
 * Permet de savoir si l'utilisateur est connecté
 *
 * @return boolean
 */
function isConnected()
{
    if (isset($_SESSION['user']['isConnected']) && $_SESSION['user']['isConnected']) {
        return true;
    }
    return false;
}
