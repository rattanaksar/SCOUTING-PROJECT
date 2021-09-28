<?php
class Championship extends MainModel
{
    protected $name = '';
    protected $table = 'CLUB';

    public function getChampionshiplist()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `name` FROM `CHAMPIONSHIP`');
        $ChampionshipUserList = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $ChampionshipUserList;
    }
}
