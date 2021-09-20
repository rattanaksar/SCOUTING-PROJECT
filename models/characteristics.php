<?php
class characteristics extends MainModel
{
    protected $role = '';
    protected $name = '';
    protected $height = '';
    protected $foot_prefered = '';
    protected $table = 'characteristics';

    public function getCharacteristicsUser()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `name`,`level` FROM `CHARACTERISTICS`');
        $roleUserList = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $roleUserList;
    }
}
