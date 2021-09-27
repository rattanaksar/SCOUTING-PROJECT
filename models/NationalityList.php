<?php
class NationalityList extends MainModel
{
    protected $name = '';
    protected $id_NATIONALITY = 0;
    protected $table = 'NATIONALITY_LIST';

    public function addNationality()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `NATIONALITY_LIST` (`id`,id_NATIONALITY`) VALUES (:id,:id_NATIONALITY)');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_NATIONALITY', $this->id_NATIONALITY, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }

    public function updateNationality()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE `NATIONALITY_LIST` SET `id_NATIONALITY` = :id_NATIONALITY WHERE id = :id');
        $pdoStatment->bindValue(':id_NATIONALITY', $this->id_NATIONALITY, PDO::PARAM_STR);
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée, on retourne vrai
        return $pdoStatment->execute();
    }
}
