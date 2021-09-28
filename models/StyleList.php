<?php
class StyleList extends MainModel
{
    protected $id_STYLE = 0;
    protected $table = 'STYLE_LIST';

    public function addStyleUser()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `STYLE_LIST` (`id`,id_STYLE`) VALUES (:id,:id_STYLE)');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_STYLE', $this->id_POSITION, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }
    public function updateStyleUser()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE `STYLE_LIST` SET `id_STYLE` = :id_STYLE WHERE id = :id');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_STYLE', $this->id_POSITION, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée, on retourne vrai
        return $pdoStatment->execute();
    }
}
