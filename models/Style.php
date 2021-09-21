<?php
class Style extends MainModel
{
    protected $name = '';
    protected $table = 'style';

    public function getStyleUser()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `name` FROM `STYLE`');
        $styleUserList = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $styleUserList;
    }
}
