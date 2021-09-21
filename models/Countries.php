<?php
class Countries extends MainModel
{
    protected $countrycode = '';
    protected $countryname = '';
    protected $table = 'COUNTRIES';

    public function getCountriesList()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `countrycode`,`countryname` FROM `COUNTRIES`');
        $countriesList = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $countriesList;
    }
}
