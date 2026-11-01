<?php
require_once __DIR__ . '/BaseDao.php';

class SkillsDao extends BaseDao
{
    

    public function __construct()
    {
        parent::__construct('skills', ['userFK','name']);
    }

    public function getByName($name)
    {
        return $this->query_unique("SELECT * FROM skills WHERE name = :name", ['name' => $name]);
    }
}