<ul class="card-list">
    <?php foreach ($usersList as $user) { ?>
        <li class="card">
            <a class="card-image" href="?view=userprofile&userId=<?= $user->id ?>" style="background-image: url(./assets/logo/SCOUTING.png);" data-image-full="(./assets/logo/SCOUTING.png)">
                <img src="(./assets/logo/SCOUTING.png)" alt="Card Players" />
            </a>
            <h2 class><?= $user->lastname; ?></h2>
            <h3 class><?= $user->firstname; ?></h3>
            </a>
        </li> <?php } ?>
    <script type="text/javascript" src="./script/userlist.js"></script>