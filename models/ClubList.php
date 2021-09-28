<?php

class clubList extends MainModel
{
    protected $id = 0;
    protected $id_CLUB = 0;
    protected $table = 'CLUB_LIST';


    public function addClubUser()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `CLUB_LIST` (`id`,id_CLUB`) VALUES (:id,:id_CLUB)');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_CLUB', $this->id_POSITION, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }
    public function updateClubUser()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE `CLUB_LIST` SET `id_CLUB` = :id_CLUB WHERE id = :id');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_CLUB', $this->id_POSITION, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée, on retourne vrai
        return $pdoStatment->execute();
    }
}
