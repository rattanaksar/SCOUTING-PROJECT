<?php
class StrongfootList extends MainModel
{
    protected $id_FOOTPREFERED = 0;
    protected $id = 0;
    protected $table = 'FOOTPREFERED_LIST';

    public function addFootprefered()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `FOOTPREFERED_LIST` (`id`,id_FOOTPREFERED`) VALUES (:id,:id_FOOTPREFERED)');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_FOOTPREFERED', $this->id_POSITION, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }
    public function updateFootPrefered()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE `FOOTPREFERED_LIST` SET `id_FOOTPREFERED` = :id_FOOTPREFERED WHERE id = :id');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_FOOTPREFERED', $this->id_POSITION, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée, on retourne vrai
        return $pdoStatment->execute();
    }
}
