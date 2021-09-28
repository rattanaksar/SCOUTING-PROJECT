<?php
class Club extends MainModel
{
    protected $name = '';
    protected $table = 'CLUB';

    public function getClublist()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `name` FROM `CLUB`');
        $ClubUserList = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $ClubUserList;
    }
}
