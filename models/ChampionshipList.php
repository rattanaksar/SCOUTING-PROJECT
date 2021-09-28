<?php

class ChampionshipList extends MainModel
{
    protected $id = 0;
    protected $id_CHAMPIONSHIP = 0;
    protected $table = 'CHAMPIONSHIP_LIST';


    public function addChampionshipUser()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `CHAMPIONSHIP_LIST` (`id`,id_CHAMPIONSHIP`) VALUES (:id,:id_CHAMPIONSHIP)');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_CHAMPIONSHIP', $this->id_POSITION, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }
    public function updateChampionshipUser()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE `CHAMPIONSHIP_LIST` SET `id_CHAMPIONSHIP` = :id_CHAMPIONSHIP WHERE id = :id');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_CHAMPIONSHIP', $this->id_POSITION, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée, on retourne vrai
        return $pdoStatment->execute();
    }
}
