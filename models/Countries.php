<?php
class Countries extends MainModel
{
    protected $countrycode = '';
    protected $countryname = '';
    protected $id_country = 0;
    protected $table = 'COUNTRIES';

    public function getCountriesList()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `COUNTRYCODE`,`COUNTRYNAME` FROM `COUNTRIES`');
        $countriesList = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $countriesList;
    }
}
