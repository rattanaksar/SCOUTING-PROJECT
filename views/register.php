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
                        </div>
                    </div>
                    <?php
                    if (!empty($registerForm->error['pseudo'])) {
                    ?>
                        <p class="fst-italic text-danger"><?= $message ?></p>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <label for="lastname" class="cols-sm-2 control-label">Votre nom</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-user fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Entrer votre nom" />
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!empty($registerForm->error['lastname'])) {
                    ?>
                        <p class="fst-italic text-danger"><?= $message ?></p>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <label for="firstname" class="cols-sm-2 control-label">Votre prénom</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-user fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Entrer votre prénom" />
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!empty($registerForm->error['firstname'])) {
                    ?>
                        <p class="fst-italic text-danger"><?= $message ?></p>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <label for="birthdate" class="cols-sm-2 control-label">Date de naissance</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-calendar-o fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="date" class="form-control" name="birthdate" id="birthdate" />
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
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!empty($registerForm->error['mail'])) {
                    ?>
                        <p class="fst-italic text-danger"><?= $message ?></p>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <label for="role" class="form-label" id="role">Profil</label>
                        <div class="col-md-auto">
                            <select class="form-control" name="role">
                                <option value="" selected disable hidden>Choisissez votre profil</option>
                                <?php foreach ($roleUsers as $roles) { ?>
                                    <option value="<?= $roles->id ?>"><?= $roles->name ?></option>
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
                            </div>
                        </div>
                    </div>
                    <?php
                    if (!empty($registerForm->error['password'])) {
                    ?>
                        <p class="fst-italic text-danger"><?= $message ?></p>
                    <?php
                    }
                    ?>
                    <div class="form-group ">
                        <input type="submit" value="S'inscrire" id="registerBtn" name="register" class="btn btn-outline-secondary">
                    </div>
                    <p class><?= $message ?></p>
                </div>
            </form>
        </div>
    </div>
</div>