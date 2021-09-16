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
                    <div class="form-group">
                        <label for="lastname" class="cols-sm-2 control-label">Votre nom</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-user fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Entrer votre nom" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="cols-sm-2 control-label">Votre prénom</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon" style="padding:0.9em"><i class="fa fa-user fa" style="color:white" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Entrer votre prénom" />
                            </div>
                        </div>
                    </div>
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
                    <!-- <div class="form-group">
                        <label for="profil" class="form-label">Profil</label>
                        <div class="col-md-auto">
                            <select class="form-control" name="txt_role">
                                <option value="" selected="selected"> - choisissez un profil - </option>
                                <option value="Joueur">Joueur</option>
                                <option value="Agent">Agent</option>
                                <option value="Club">Club</option>
                            </select>
                        </div>
                    </div> -->
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
                    <div class="form-group ">
                        <input type="submit" value="S'inscrire" name="register" class="btn btn-outline-secondary login-button" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>