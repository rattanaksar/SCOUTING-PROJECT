<!DOCTYPE html>
<link rel="stylesheet" href="./assets/profile.css">
<div class="container">
    <input type="submit" name="submit" class="btn btn-outline-secondary login-button" value="Modifer vos informations" />
    <div class="top">
        <div class="main">
            <form action="profil.php?userId=<?= $_GET['userId']->id ?>" method="post">
                <ul>
                    <li class="pseudo"><?= $pseudo ?></li>
                    <li class="name"><?= $lastname ?> <?= $firstname ?></li>
                    <li class="bar"></li>
                    <li class="position">Attaquant</li>
                    <li class="flag"><img src="https://image.flaticon.com/icons/svg/330/330487.svg" alt="Argentina" title="Argentina"></li>
                </ul>
        </div>
        <div class="photo"></div>
        <div class="info">
            <ul>
                <li class="header">Taille</li>
                <li class="data">171 cm</li>
                <li class="bar"></li>
                <li class="header">Poids</li>
                <li class="data">80 kg</li>
                <li class="bar"></li>
                <li class="header">Date de naissance</li>
                <li class="data"><?= $birthdate ?></li>
                <li class="bar"></li>
                <li class="header">Club</li>
                <li class="data">Shanghái Shenhua (China)</li>
            </ul>
        </div>
    </div>
    <div class="trophies">
        <div class="card">
            <img src="http://www.bocajuniors.com.ar/rebrand/images/copas/copa-intercontinental.png" alt="Copa Intercontinental" title="Copa Intercontinental">
            <div class="title">Copa Intercontinental</div>
            <div class="year">2003</div>
        </div>
        <div class="card">
            <img src="http://www.bocajuniors.com.ar/rebrand/images/copas/copa-libertadores.png" alt="Copa Libertadores" title="Copa Libertadores">
            <div class="title">Copa Libertadores</div>
            <div class="year">2003</div>
        </div>
        <div class="card">
            <img src="http://www.bocajuniors.com.ar/rebrand/images/copas/copa-sudamericana.png" alt="Copa Sudamericana" title="Copa Sudamericana">
            <div class="title">Copa Sudamericana</div>
            <div class="year">2004</div>
        </div>
    </div>
</div>