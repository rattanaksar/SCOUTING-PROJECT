<div class="container">
    <div class="row main">
        <div class="main-login main-center divAdd">
            <h1>Inscription</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="pseudo" class="cols-sm-2 control-label">Pseudo</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-user fa" style="color:white" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Entrer votre pseudo" />
                            <?php
                            if (!empty($error['pseudo'])) {
                            ?>
                                <p class="text-danger"><?= $error['pseudo']; ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="cols-sm-2 control-label">Votre nom</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-user fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Entrer votre nom" />
                                <?php
                                if (!empty($error['lastname'])) {
                                ?>
                                    <p class="text-danger"><?= $error['lastname']; ?></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="cols-sm-2 control-label">Votre prénom</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-user fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Entrer votre prénom" />
                                <?php
                                if (!empty($error['firstname'])) {
                                ?>
                                    <p class="text-danger"><?= $error['firstname']; ?></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthdate" class="cols-sm-2 control-label">Date de naissance</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-calendar-o fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="date" class="form-control" name="birthdate" id="birthdate" />
                                <?php
                                if (!empty($error['birthdate'])) {
                                ?>
                                    <p class="text-danger"><?= $error['birthtdate']; ?></p>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="form-label">Adresse mail</label>
                        <label for="mail" class="cols-sm-2 control-label"></label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-envelope fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="email" name="mail" id="mail" class="form-control" />
                                <?php
                                if (!empty($error['mail'])) {
                                ?>
                                    <p class="text-danger"><?= $error['mail']; ?></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role" class="form-label" id="role">Profil</label>
                        <div class="col-md-auto">
                            <select class="form-control" name="role">
                                <option value="" selected disable hidden>Choisissez votre profil</option>
                                <?php foreach ($roleUsers as $roles) { ?>
                                    <option value="<?= $roles->name ?>"><?= $roles->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Mot de passe</label>
                        <label for="password" class="cols-sm-2 control-label"></label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-key fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="password" name="password" id="password" class="form-control" />
                                <?php
                                if (!empty($error['mail'])) {
                                ?>
                                    <p class="text-danger"><?= $error['mail']; ?></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <input type="submit" value="S'inscrire" id="registerBtn" name="register" class="btn btn-outline-secondary" value="Créer mon compte" data-bs-toggle="modal" data-bs-target="#userCreated" s>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" id="userCreated" aria-labelledby="userCreatedLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bienvenue!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead">
                    <?= $userCreated; ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>