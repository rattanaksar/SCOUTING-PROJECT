<?php
class spokenLanguages extends MainModel
{
    protected $table = 'LANGUAGES_SPOKEN';

    public function getLanguagesSpoken()
    {
        $pdoStatment = $this->pdo->query('SELECT `id`,`name` FROM `LANGUAGES_SPOKEN`');
        $spokenLanguages = $pdoStatment->fetchAll(PDO::FETCH_OBJ);
        return $spokenLanguages;
    }
}
