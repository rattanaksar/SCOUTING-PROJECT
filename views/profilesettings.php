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
                                            <label for="inputUsername">Pseudo</label>
                                            <input type="text" class="form-control" id="inputUsername" placeholder="Pseudo">
                                        </div>
                                        <div class="form-group">
                                            <label for="countrySelected">Pays</label>
                                            <br>
                                            <select id="country">
                                                <option value="" selected disable hidden>--Sélectionnez votre pays--</option>
                                                <?php foreach ($CountriesList as $country) { ?>
                                                    <option value="<?= $country->id ?>"><?= $country->COUNTRYNAME ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nationalitySelected">Nationalité</label>
                                            <br>
                                            <select id="nationality">
                                                <option value="" selected disable hidden>--Sélectionnez votre nationalité--</option>
                                                <?php foreach ($nationalityList as $nationality) { ?>
                                                    <option value="<?= $nationality->name ?>"><?= $nationality->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="spokenLanguages">Langue parlée</label>
                                            <br>
                                            <select id="spokenLanguages">
                                                <option value="" selected disable hidden>--Choisissez votre langue--</option>
                                                <?php foreach ($spokenLanguages as $languages) { ?>
                                                    <option value="<?= $languages->name ?>"><?= $languages->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <label for="bio">Description</label>
                                            <textarea rows="2" class="form-control" id="inputBio" placeholder="Parlez nous de vous"></textarea>
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
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputFirstName">Prénom</label>
                                        <input type="text" class="form-control" id="inputFirstName" placeholder="Prénom">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputLastName">Nom</label>
                                        <input type="text" class="form-control" id="inputLastName" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Mail</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="birthdate">Date de naissance</label>
                                    <input type="date" class="form-control" id="birthdate" placeholder="date de naissance">
                                </div>
                                <input type="submit" value="Enregister les modifications" id="updateBtn" name="UpdateContactDetails" class="btn btn-outline-secondary" value="Modifier les informations "></button>
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
                            <form>
                                <div class="form-group">
                                    <label for="inputPasswordNew2">Confirmez votre mot de passe avant la suppression</label>
                                    <input type="password" class="form-control" id="inputPasswordNew2">
                                </div>
                                <input type="submit" id="deleteBtn" name="DeleteAccount" class="btn btn-outline-danger" value="Supprimer votre compte utilisateur"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>