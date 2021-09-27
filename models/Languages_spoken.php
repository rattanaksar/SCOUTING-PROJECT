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
}
