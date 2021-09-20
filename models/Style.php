<?php
class style extends MainModel
{
    protected $role = '';
    protected $name = '';
    protected $table = 'style';

    public function getStyleUser()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `name` FROM `STYLE`');
        $styleUserList = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $styleUserList;
    }
}
