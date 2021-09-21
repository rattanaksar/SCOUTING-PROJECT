<?php
class Strongfoot extends MainModel
{
    protected $foot_prefered = '';
    protected $table = 'FOOTPREFERED';

    public function getFootPrefered()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`,`foot_prefered` FROM `FOOTPREFERED`');
        $footprefered = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $footprefered;
    }
}
