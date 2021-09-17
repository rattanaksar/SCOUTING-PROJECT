<?php
class Users extends MainModel
{

    protected $id = 0;
    protected $pseudo = '';
    protected $mail = '';
    protected $lastname = '';
    protected $firstname = '';
    protected $password_hash = '';
    protected $birthdate = '';
    protected $hash = null;
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
        $pdoStatment->bindValue(':id_roles', $this->role, PDO::PARAM_INT);
        $pdoStatment->bindValue(':hash', $this->hash, PDO::PARAM_STR);
        $pdoStatment->execute();
        var_dump($this);
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
        if (!empty($result))
            $result = $result->password_hash;
        return $result;
    }

    public function getUserInfoById()
    {
        $pdoStatment = $this->pdo->prepare('SELECT `users`.`id`, `pseudo`, `firstname`, `name`, `lastname`,`birthdate`, `avatar` FROM users INNER JOIN `role` on users.id_roles = `role`.`id` WHERE `users`.`id`= :id');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->execute();
        // On retourne une ligne depuis un jeu de résultats associé à l'objet 
        return $pdoStatment->fetch(PDO::FETCH_OBJ);
    }

    public function getUserInfoByMail()
    {
        $pdoStatment = $this->pdo->prepare('SELECT `users`.`id`, `pseudo`, `firstname`, `lastname`, `birthdate`, `avatar`,`name` FROM `users` INNER JOIN `role` ON `users`.`id_roles` = `role`.`id` WHERE `mail` = :mail');
        $pdoStatment->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatment->execute();
        return $pdoStatment->fetch(PDO::FETCH_OBJ);
    }

    public function updateUserInfo()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE users SET lastname=:lastname, firstname=:firstname, birthdate=:birthdate, pseudo=:pseudo WHERE id = :id');
        $pdoStatment->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $pdoStatment->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $pdoStatment->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $pdoStatment->bindValue(':pseudo', $this->phone, PDO::PARAM_STR);
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }
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
}
