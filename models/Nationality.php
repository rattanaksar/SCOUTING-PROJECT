<?php
class Nationality extends MainModel
{
    protected $name = '';
    protected $id_NATIONALITY = '';
    protected $table = 'Nationality';

    public function getNationality()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`,`name` FROM `nationality`');
        $Listnationality = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $Listnationality;
    }
    public function addNationality()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `Nationality` (`id_NATIONALITY`) VALUES (:id_NATIONALITY)');
        $pdoStatment->bindValue(':id_NATIONALITY', $this->idPatients, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }

    public function updateNationality()
    {
        $query = 'UPDATE `Nationality` SET `id_NATIONALITY` = :id_NATIONALITY WHERE id = :id';
        $pdoStatment = $this->pdo->prepare($query);
        $pdoStatment->bindValue(':id_NATIONALITY', $this->idPatients, PDO::PARAM_STR);
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée, on retourne vrai
        return $pdoStatment->execute();
    }
}
