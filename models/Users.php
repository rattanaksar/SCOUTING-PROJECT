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
        $query = 'INSERT INTO users(pseudo, lastname, firstname, birthdate, mail, password_hash, hash) VALUES(:pseudo,:lastname, :firstname, :birthdate, :mail, :password_hash, :hash)';
        $pdoStatment = $this->pdo->prepare($query);
        $pdoStatment->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $pdoStatment->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $pdoStatment->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $pdoStatment->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
        $pdoStatment->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatment->bindValue(':password_hash', $this->password_hash, PDO::PARAM_STR);
        $pdoStatment->bindValue(':hash', $this->hash, PDO::PARAM_STR);
        var_dump($this->pdo);
        die();
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
        if (!empty($result))
            $result = $result->password_hash;
        return $result;
    }

    public function getUserInfoByMail()
    {
        $pdoStatment = $this->pdo->prepare('SELECT `users`.`id`, `pseudo`, `level`, `last_session_at`,`avatar`  FROM `users` INNER JOIN `roles` ON `users`.`id_roles` = `roles`.`id` WHERE `mail` = :mail');
        $pdoStatment->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $pdoStatment->execute();
        return $pdoStatment->fetch(PDO::FETCH_OBJ);
    }

    public function updateUserInfos($userInfos)
    {
        $update = [];
        foreach ($userInfos as $field => $value) {
            $update[] = $field . ' = :' . $field;
        }
        $finalUpdate = implode(', ', $update);
        $pdoStatment = $this->pdo->prepare('UPDATE ' . $this->table . ' SET ' . $finalUpdate . ' WHERE `id` = :id');
        foreach ($userInfos as $field => $value) {
            $pdoStatment->bindValue(':' . $field, $value, PDO::PARAM_STR);
        }
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        return   $pdoStatment->execute();
    }
}
