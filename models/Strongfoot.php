<?php
class Strongfoot extends MainModel
{
    protected $name = '';
    protected $table = 'FOOTPREFERED';

    public function getFootPrefered()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`,`name` FROM `FOOTPREFERED`');
        $footprefered = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $footprefered;
    }
}
