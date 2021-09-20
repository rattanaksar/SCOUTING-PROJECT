<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container p-0">
    <h1 class="h3 mb-3">Paramètres</h1>
    <div class="row">
        <div class="col-md-5 col-xl-4">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Paramètres de votre profil</h5>
                </div>

                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
                        Compte
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                        Mot de passe
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#characteristics" role="tab">
                        Caractéristiques
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
                                            <label for="inputUsername">Description</label>
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

                                <button type="submit" class=" btn btn-outline-secondary login-button">Enregistrer vos modifications</button>
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
                                    <label for="inputEmail4">Mail</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="birthdate">Date de naissance</label>
                                    <input type="date" class="form-control" id="birthdate" placeholder="date de naissance">
                                </div>
                                <input type="submit" value="Enregister les modifications" id="updateBtn" name="update" class="btn btn-outline-secondary" value="Modifier les informations "></button>
                            </form>

                        </div>
                    </div>

                </div>
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
                                <button type="submit" class="btn btn-outline-secondary login-button">Enregistrer vos modifications</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="characteristics" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Caractéristiques</h5>

                            <form>
                                <div class="form-group">
                                    <label for="inputweight">Taille</label>
                                    <input type="number" class="form-control" id="inputweight">
                                </div>
                                <div class="form-group">
                                    <label for="inputheight">Poids</label>
                                    <input type="number" class="form-control" id="inputheight">
                                </div>
                                <div class="form-group">
                                    <label for="foot-selected">Pied préféré</label>
                                    <br>
                                    <select id="foot-selected">
                                        <option value="">--Choississez votre pied fort--</option>
                                        <option value="left">Droit</option>
                                        <option value="right">Gauche</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="spokenLanguages">Langues parlées</label>
                                    <br>
                                    <select id="spokenLanguages">
                                        <option value="">--Choississez la langue parlée--</option>
                                        <option value="FR">Français</option>
                                        <option value="EN"></option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary login-button">Enregistrer vos modifications</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="deleteaccount" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Suppression du compte</h5>
                            <form>
                                <div class="form-group">
                                    <label for="inputPasswordNew2">Confirmez votre mot de passe avant la suppression</label>
                                    <input type="password" class="form-control" id="inputPasswordNew2">
                                </div>
                                <button type="submit" class="btn btn-outline-danger login-button">Supprimez votre compte</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>