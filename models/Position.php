<?php
class Position extends MainModel
{
    protected $id = '';
    protected $name = '';
    protected $table = 'style';

    public function getPosition()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `name` FROM `POSITION`');
        $Listposition = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $Listposition;
    }
}
