<!DOCTYPE html>
<link rel="stylesheet" href="./assets/userlist.css">
<ul class="card-list">
    <?php foreach ($usersList as $user) { ?>
        <li class="card">
            <a class="card-image" href="?view=profile<?= $user->id ?>" target="_blank" style="background-image: url(./assets/logo/SCOUTING.png);" data-image-full="(./assets/logo/SCOUTING.png)">
                <img src="(./assets/logo/SCOUTING.png)" alt="Psychopomp" />
            </a>
            <h2 class><?= $user->lastname; ?></h2>
            <h3 class><?= $user->firstname; ?></h3>
            </a>
        </li> <?php } ?>
    <script type="text/javascript" src="./script/userlist.js"></script>