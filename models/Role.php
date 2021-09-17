<?php
class role extends MainModel
{
    protected $role = '';
    protected $name = '';
    protected $table = 'role';

    public function getRoleUser()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `name`,`level` FROM `ROLE`');
        $roleUserList = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $roleUserList;
    }
}
