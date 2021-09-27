<?php
class Nationality extends MainModel
{
    protected $name = '';
    protected $id_NATIONALITY = 0;
    protected $table = 'NATIONALITY';

    public function getNationality()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`,`name` FROM `nationality`');
        $Listnationality = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $Listnationality;
    }
}
