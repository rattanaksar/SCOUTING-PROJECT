<?php
class spokenLanguages extends MainModel
{
    protected $name = '';
    protected $id_languages_spoken = 0;
    protected $table = 'languages_spoken';

    public function getLanguagesSpoken()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`,`name` FROM `LANGUAGES_SPOKEN`');
        $spokenLanguages = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $spokenLanguages;
    }
    public function addCountries()
    {
        $pdoStatment = $this->pdo->prepare('INSERT INTO `languages_spoken` (`id_languages_spoken`) VALUES (:id_languages_spoken)');
        $pdoStatment->bindValue(':id_languages_spoken', $this->id_COUNTRY, PDO::PARAM_INT);
        return $pdoStatment->execute();
    }

    public function updateCountries()
    {
        $pdoStatment = $this->pdo->prepare('UPDATE `languages_spoken` SET `id_languages_spoken` = :id_languages_spoken WHERE id = :id');
        $pdoStatment->bindValue(':id_languages_spoken', $this->id_languages_spoken, PDO::PARAM_STR);
        $pdoStatment->bindValue(':id', $this->id, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée, on retourne vrai
        return $pdoStatment->execute();
    }
}
