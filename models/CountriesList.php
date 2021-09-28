<?php
class CountriesList extends MainModel
{
    protected $id_country = 0;
    protected $id = 0;
    protected $table = 'COUNTRIES_LIST';

    public function addCountries()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `COUNTRIES_LIST` (`id`,`id_COUNTRY`) VALUES (:id,:id_COUNTRY)');
        $pdoStatment->bindValue(':id', $this->id_COUNTRY, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_COUNTRY', $this->id_COUNTRY, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }
    public function updateCountries()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE `COUNTRIES_LIST` SET `id_COUNTRY` = :id_COUNTRY WHERE id = :id');
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        $pdoStatment->bindValue(':id_COUNTRY', $this->id_country, PDO::PARAM_STR);
        return $pdoStatment->execute();
    }
}
