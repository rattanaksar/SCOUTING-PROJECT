<?php
class Users extends MainModel
{
    protected $id = 0;
    protected $pseudo = '';
    protected $mail = '';
    protected $lastname = '';
    protected $firstname = '';
    protected $password_hash = '';
    protected $birthdate = '01/01/1900';
    protected $description = '';
    protected $hash = null;
    protected $weight = '';
    protected $height = '';
    protected $id_roles = 0;
    protected $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Methode permettant d'enregistrer un utilisateur
     *
     * @return boolean
     */
    public function addUser()
    {
        $query = 'INSERT INTO users(pseudo, lastname, firstname, birthdate, mail, password_hash, hash,id_roles) VALUES(:pseudo,:lastname, :firstname, :birthdate, :mail, :password_hash, :hash, :id_roles)';
        $pdoStatment = $this->pdo->prepare($query);
        $pdoStatment->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $pdoStatment->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $pdoStatment->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $pdoStatment->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $pdoStatment->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatment->bindValue(':password_hash', $this->password_hash, PDO::PARAM_STR);
        $pdoStatment->bindValue(':id_roles', $this->id_roles, PDO::PARAM_INT);
        $pdoStatment->bindValue(':hash', $this->hash, PDO::PARAM_STR);
        $pdoStatment->execute();
        return $this->pdo->lastInsertId();
    }
    /**
     * Methode permettant de récupérer son hash
     * @return string
     */
    public function getUserHash()
    {
        $pdoStatment = $this->pdo->prepare('SELECT `password_hash` FROM `users` WHERE `mail` = :mail');
        $pdoStatment->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatment->execute();
        $result = $pdoStatment->fetch(PDO::FETCH_OBJ);
        if (!empty($result)) {
            $result = $result->password_hash;
        }
        return $result;
    }
    public function getUserHashDelete()
    {
        $pdoStatment = $this->pdo->prepare('SELECT `password_hash` FROM `users` WHERE `mail` = :mail');
        $pdoStatment->bindValue(':mail', $_SESSION['user']['mail'], PDO::PARAM_STR);
        $pdoStatment->execute();
        $result = $pdoStatment->fetch(PDO::FETCH_OBJ);
        if (!empty($result)) {
            $result = $result->password_hash;
        }
        return $result;
    }
    // Méthode pour récupérer les informations de l'utilisateur avec l'ID
    public function getUserInfoById()
    {
        $pdoStatment = $this->pdo->prepare('SELECT `pseudo`, `firstname`, `role`.`name`, `lastname`,`birthdate`, `avatar`, `height`, `weight`, `description`, `mail`,`NATIONALITY`.`name`AS `Nationalité`, 
        `CHAMPIONSHIP`. `name` AS `Championnat`, 
        `CLUB`.`name`AS `Club`,
        `FOOTPREFERED`.`name`AS `Pied.préféré`,
        `LANGUAGES_SPOKEN`.`name`AS `Langue`,
        `STYLE`.`name`AS `Style`,
        `POSITION`. `name`AS `Position`
        FROM  `USERS`
        LEFT JOIN `ROLE` on `USERS`.`id_roles` = `role`.`id` 
        LEFT JOIN `NATIONALITY_LIST` ON `users`.`id`= `NATIONALITY_LIST`.`id` 
        LEFT JOIN `NATIONALITY`ON `NATIONALITY`.`id`= `id_NATIONALITY` 
        LEFT JOIN `CHAMPIONSHIP_LIST`ON `users`.`id`= `CHAMPIONSHIP_LIST`.`id` 
        LEFT JOIN `CHAMPIONSHIP`ON `CHAMPIONSHIP`. `ID`= `id_CHAMPIONSHIP`
        LEFT JOIN `POSITION_LIST`ON `USERS`.`ID`= `POSITION_LIST`.`id`
        LEFT JOIN `POSITION` ON  `POSITION`.`ID` = `id_POSITION`
        LEFT JOIN `CLUB_LIST` ON `users`.`id` = `CLUB_LIST`.`id`
        LEFT JOIN `CLUB` ON `CLUB`. `id`= `id_CLUB`
        LEFT JOIN `FOOTPREFERED_LIST` ON `users`.`id` = `FOOTPREFERED_LIST`.`id`
        LEFT JOIN `FOOTPREFERED` ON `FOOTPREFERED`. `id`= `id_FOOTPREFERED`
        LEFT JOIN `LANGUAGES_LIST` ON `users`.`id` = `LANGUAGES_LIST`.`id`
        LEFT JOIN `LANGUAGES_SPOKEN` ON `LANGUAGES_SPOKEN`. `id`= `id_LANGUAGES_SPOKEN`
        LEFT JOIN `STYLE_LIST` ON `users`.`id` = `STYLE_LIST`.`id`
        LEFT JOIN `STYLE` ON `STYLE`. `id`= `id_STYLE`
        WHERE `users`.`id`= :id');
        $pdoStatment->bindValue('id', $this->id, PDO::PARAM_INT);
        $pdoStatment->execute();
        // On retourne une ligne depuis un jeu de résultats associé à l'objet
        return $pdoStatment->fetch(PDO::FETCH_OBJ);
    }
    // Méthode pour récupérer les informations de l'utilisateur via l'email
    public function getUserInfoByMail()
    {
        $pdoStatment = $this->pdo->prepare('SELECT `users`.`id`, `pseudo`, `firstname`, `lastname`, `birthdate`, `avatar`,`name` FROM `users` INNER JOIN `role` ON `users`.`id_roles` = `role`.`id` WHERE `mail` = :mail');
        $pdoStatment->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatment->execute();
        return $pdoStatment->fetch(PDO::FETCH_OBJ);
    }
    // Méthode pour modifier les informations de l'utilisateur
    public function updateProfile()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE users SET lastname=:lastname, firstname=:firstname, birthdate=:birthdate, pseudo=:pseudo, description =:description, weight =:weight, height =:height  WHERE id=:userId');
        $pdoStatment->bindParam(':lastname', $this->lastname, PDO::PARAM_STR);
        $pdoStatment->bindParam(':firstname', $this->firstname, PDO::PARAM_STR);
        $pdoStatment->bindParam(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $pdoStatment->bindParam(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $pdoStatment->bindParam(':description', $this->description, PDO::PARAM_STR);
        $pdoStatment->bindParam(':weight', $this->weight, PDO::PARAM_STR);
        $pdoStatment->bindParam(':height', $this->height, PDO::PARAM_STR);
        $pdoStatment->bindParam(':userId', $this->id, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }
    // Méthode pour récupérer la liste des utilisateurs
    public function getUsersList()
    {
        $usersList = array();
        $query = ('SELECT `id`, `lastname`, `firstname` FROM `users`');
        $usersResult = $this->pdo->query($query);
        if (is_object($usersResult)) {
            $usersList = $usersResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $usersList;
    }

    // Méthode pour vérifier si l'utilisateur existe déjà dans la base
    public function checkUserExists()
    {
        $query = 'SELECT COUNT(*) AS `isExist` FROM `users` WHERE `id` = :id';
        $pdoStatment = $this->pdo->prepare($query);
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->execute();
        $result = $pdoStatment->fetch(PDO::FETCH_OBJ); // result = objet
        return $result->isExist;
    }
    // Méthode de suppression du profil 
    public function deleteProfile()
    {
        $pdoStatment = $this->pdo->prepare('DELETE FROM `USERS`WHERE `id`= :id');
        $pdoStatment->bindValue(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
        $pdoStatment->execute();
        return !$this->checkUserExists(); // Le point d'exclamation devant $this renvoie un false
    }
}
