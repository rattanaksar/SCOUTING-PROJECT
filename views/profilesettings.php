<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container p-0">
    <h1 class="h3 mb-3">Paramètres</h1>
    <div class="row">
        <div class="col-md-5 col-xl-4">
            <!-- Menu de gauche !-->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Paramètres de votre profil</h5>
                </div>

                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
                        Compte
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#characteristics" role="tab">
                        Caractéristiques
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                        Mot de passe
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#deleteaccount" role="tab">
                        Suppression de votre compte
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-7 col-xl-8">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="account" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions float-right">
                                <div class="dropdown show">
                                    <a href="#" data-toggle="dropdown" data-display="static">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Informations</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="clubSelected">Club</label>
                                            <br>
                                            <select id="club">
                                                <option value="" selected disable hidden>--Sélectionnez votre club--</option>
                                                <?php foreach ($clubList as $club) { ?>
                                                    <option value="<?= $club->id ?>"><?= $club->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="championshipSelected">Championnat</label>
                                            <br>
                                            <select id="championship">
                                                <option value="" selected disable hidden>--Sélectionnez votre championnat--</option>
                                                <?php foreach ($championshipList as $championship) { ?>
                                                    <option value="<?= $championship->id ?>"><?= $championship->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <img alt="image profile" src="https://s3.amazonaws.com/media.muckrack.com/profile/images/10239946/judiq.jpg.256x256_q100_crop-smart.jpg" class="rounded-circle img-responsive mt-2" width="128" height="128">
                                            <div class="mt-2">
                                                <span class="btn btn-outline-secondary login-button"><i class="fa fa-upload"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Enregister les modifications" id="updateBtn" name="UpdateUserInfo" class="btn btn-outline-secondary" value="Modifier les informations "></button>
                            </form>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-actions float-right">
                                <div class="dropdown show">
                                    <a href="#" data-toggle="dropdown" data-display="static"></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Coordonnées</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="updateFirstname">Prénom</label>
                                        <input type="text" class="form-control" id="updateFirstname" name="updateFirstname" value="<?= isset($_SESSION['user']['firstname']) ? $_SESSION['user']['firstname'] : '' ?>">
                                    </div>
                                    <?php
                                    if (!empty($updateForm->error['firstname'])) {
                                    ?>
                                        <p class="fst-italic text-danger"><?= $message ?></p>
                                    <?php
                                    }
                                    ?>
                                    <div class="form-group col-md-6">
                                        <label for="updateLastname">Nom</label>
                                        <input type="text" class="form-control" id="updateLastname" name="updateLastname" value="<?= isset($_SESSION['user']['lastname']) ? $_SESSION['user']['lastname'] : '' ?>">
                                    </div>
                                    <?php
                                    if (!empty($updateForm->error['lastname'])) {
                                    ?>
                                        <p class="fst-italic text-danger"><?= $message ?></p>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="updatePseudo">Pseudo</label>
                                    <input type="text" class="form-control" id="updatePseudo" name="updatePseudo" value="<?= isset($_SESSION['user']['pseudo']) ? $_SESSION['user']['pseudo'] : '' ?>">
                                </div>
                                <?php
                                if (!empty($updateForm->error['pseudo'])) {
                                ?>
                                    <p class="fst-italic text-danger"><?= $message ?></p>
                                <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label for="updateMail">Mail</label>
                                    <input type="email" class="form-control" id="updateMail" name="updateMail" value="<?= isset($_SESSION['user']['mail']) ? $_SESSION['user']['mail'] : '' ?>">
                                </div>
                                <?php
                                if (!empty($updateForm->error['mail'])) {
                                ?>
                                    <p class="fst-italic text-danger"><?= $message ?></p>
                                <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label for="updateBirthdate">Date de naissance</label>
                                    <input type="date" class="form-control" id="updateBirthdate" name="updateBirthdate" value="<?= isset($_SESSION['user']['birthdate']) ? $_SESSION['user']['birthdate'] : '' ?>">
                                </div>
                                <?php
                                if (!empty($updateForm->error['birthdate'])) {
                                ?>
                                    <p class="fst-italic text-danger"><?= $message ?></p>
                                <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label for="updateHeight">Taille</label>
                                    <input type="number" class="form-control" id="updateHeight" name="updateHeight" value="<?= isset($_SESSION['user']['height']) ? $_SESSION['user']['height'] : '' ?>">
                                </div>
                                <?php
                                if (!empty($updateForm->error['height'])) {
                                ?>
                                    <p class="fst-italic text-danger"><?= $message ?></p>
                                <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label for="updateWeight">Poids</label>
                                    <input type="number" class="form-control" id="updateWeight" name="updateWeight" value="<?= isset($_SESSION['user']['weight']) ? $_SESSION['user']['weight'] : '' ?>">
                                </div>
                                <?php
                                if (!empty($updateForm->error['weight'])) {
                                ?>
                                    <p class="fst-italic text-danger"><?= $message ?></p>
                                <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label for="updateDescription">Description</label>
                                    <textarea rows="2" class="form-control" id="updateDescription" name="updateDescription" value="<?= isset($_SESSION['user']['description']) ? $_SESSION['user']['description'] : '' ?>"></textarea>
                                </div>
                                <?php
                                if (!empty($updateForm->error['description'])) {
                                ?>
                                    <p class="fst-italic text-danger"><?= $message ?></p>
                                <?php
                                }
                                ?>
                                <input type="submit" value="Enregister les modifications" id="UpdateContactDetails" name="UpdateContactDetails" class="btn btn-outline-secondary"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Formulaire de modification de mot de passe!-->
                <div class="tab-pane fade" id="password" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mot de passe</h5>

                            <form>
                                <div class="form-group">
                                    <label for="inputPasswordCurrent">Mot de passe actuel</label>
                                    <input type="password" class="form-control" id="inputPasswordCurrent">
                                    <small><a href="">Mot de passe oublié ?</a></small>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">Nouveau mot de passe</label>
                                    <input type="password" class="form-control" id="inputPasswordNew">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew2">Confirmez le nouveau mot de passe</label>
                                    <input type="password" class="form-control" id="inputPasswordNew2">
                                </div>
                                <input type="submit" id="updateBtn" name="UpdatePassword" class="btn btn-outline-secondary" value="Modifier votre mot de passe"></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Formulaire des caractéristiques!-->
                <div class="tab-pane fade" id="characteristics" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Caractéristiques</h5>

                            <form>
                                <div class="form-group">
                                    <label for="inputweight">Poids</label>
                                    <input type="number" class="form-control" id="weight" name="weight" value="<?= $users->weight ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputheight">Taille</label>
                                    <input type="number" class="form-control" id="height" name="height" value="<?= $users->height ?>">
                                </div>
                                <div class="form-group">
                                    <label for="position-selected">Poste occupé</label>
                                    <br>
                                    <select id="position-selected">
                                        <option value="" selected disable hidden>--Choisissez votre poste--</option>
                                        <?php foreach ($positionList as $position) { ?>
                                            <option value="<?= $position->name ?>"><?= $position->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="foot-selected">Pied préféré</label>
                                    <br>
                                    <select id="foot-selected">
                                        <option value="" selected disable hidden>--Choisissez votre pied fort--</option>
                                        <?php foreach ($footPrefered as $foots) { ?>
                                            <option value="<?= $foots->name ?>"><?= $foots->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="styleplayer">Style de joueur</label>
                                    <br>
                                    <select id="styleplayer">
                                        <option value="" selected disable hidden>--Choisissez votre style--</option>
                                        <?php foreach ($stylePlayerList as $styles) { ?>
                                            <option value="<?= $styles->name ?>"><?= $styles->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <input type="submit" value="Enregister les modifications" id="updateBtn" name="UpdateCharacteristics" class="btn btn-outline-secondary" value="Modifier les informations "></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Formulaire de suppression du compte!-->
                <div class="tab-pane fade" id="deleteaccount" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Suppression du compte</h5>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="inputPasswordNew2">Confirmez votre mot de passe avant la suppression</label>
                                    <input type="password" class="form-control" id="inputPasswordNew2" name="ConfirmationPassword">
                                </div>
                                <input type="submit" id="deleteBtn" name="deleteAccount" class="btn btn-outline-danger" value="Supprimer votre compte utilisateur"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>