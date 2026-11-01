<?php
require_once __DIR__ . '/BaseDao.php';

class LanguagesDao extends BaseDao
{

    public function __construct()
    {
        parent::__construct('languages', ['userFK', 'languageName',  'proficiency', 'zIndex',  'isVisible']);
    }


    public function getUserId($userId)
    {
        return $this->query("SELECT * FROM languages WHERE userFK = :id", ['id' => $userId]);
    }
    public function getLanguageName($name){
        return $this->query("SELECT * FROM languages WHERE languageName =:id", ['id'=>$name]);
    }
    
}