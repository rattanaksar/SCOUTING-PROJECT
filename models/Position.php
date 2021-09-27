<?php
class Position extends MainModel
{
    protected $id = '';
    protected $name = '';
    protected $table = 'POSITION';

    public function getPosition()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `name` FROM `POSITION`');
        $Listposition = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $Listposition;
    }
    public function addPosition()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `POSITION_LIST` (`id`,id_POSITION`) VALUES (:id,:id_POSITION)');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_POSITION', $this->id_POSITION, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }
    public function updatePosition()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE `POSITION_LIST` SET `id_POSITION` = :id_POSITION WHERE id = :id');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_POSITION', $this->id_POSITION, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée, on retourne vrai
        return $pdoStatment->execute();
    }
}
