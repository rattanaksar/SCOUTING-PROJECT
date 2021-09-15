<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="divProfil">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="imgUser">
                            <img class="fa fa-user-circle fa-5x"></i>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="infoUser">
                            <div>
                                <h2>Nom : </h2>
                                <input type="text" name="lastname" value="<?= $lastname ?>" />
                                <h2>Prénom : </h2>
                                <input type="text" name="firstname" value="<?= $firstname ?>" />
                            </div>
                            <div>
                                <h2>Date de naissance : </h2>
                                <input type="date" name="birthdate" value="<?= $birthdate ?>" />
                            </div>
                            <div>
                                <h2>Adresse e-mail : </h2>
                                <input type="email" name="mail" value="<?= $mail ?>" />
                            </div>
                            <br>
                            <input type="submit" name="submit" class="btn btn-outline-secondary" value="Enregistrer les modifications" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>