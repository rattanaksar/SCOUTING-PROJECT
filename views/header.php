<?php
require_once 'config.php';
require 'controllers/headerCtrl.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SCOUTING</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <?= isset($css) ? $css : null ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-end">
            <div class="container-fluid mr-auto">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <a class="navbar-brand" class="logo" href="index.php">
                        <img src="assets/logo/logo.png" width="130" height="120"> </a>
                </div>
                <?php
                if (isset($_SESSION['user']['isConnected']) && $_SESSION['user']['isConnected']) { ?>
                    <ul class="navbar-nav text-right">
                        <li class="nav-item active">
                        <li class="nav-item"><a class="nav-link" href="?view=profile">Voir mon profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="?view=userlist">Liste des joueurs</a></li>
                        <li class="nav-item"><a class="nav-link" href="?action=disconnect">Déconnexion</a></li>
                    <?php } else { ?> <ul class="navbar-nav text-right">
                            <li class="nav-item active">
                            <li class="nav-item"><a class="nav-link" href="?view=register">Inscription</a></li>
                            <li class="nav-item"><a class="nav-link" href="?view=login">Connexion</a></li>
                        </ul>
            </div><!-- /.navbar-collapse -->
        <?php } ?>
        </nav>
    </header>