<?php
class Countries extends MainModel
{
    protected $countrycode = '';
    protected $countryname = '';
    protected $id_country = 0;
    protected $table = 'countries';

    public function getCountriesList()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`, `countrycode`,`countryname` FROM `countries`');
        $countriesList = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $countriesList;
    }
    public function addCountries()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `countries` (`id_country`) VALUES (:id_country)');
        $pdoStatment->bindValue(':id_COUNTRY', $this->id_COUNTRY, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }

    public function updateCountries()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE `countries` SET `id_country` = :id_country WHERE id = :id');
        $pdoStatment->bindValue(':id_country', $this->id_country, PDO::PARAM_STR);
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }
}
