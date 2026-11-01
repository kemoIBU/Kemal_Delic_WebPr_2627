<?php
require_once __DIR__ . '/BaseDao.php';

class ExperiencesDao extends BaseDao
{

    public function __construct()
    {
        parent::__construct('experiances', ['userFK', 'companyName',  'position', 'description',  'startDate', 'endDate',  'zIndex', 'isVisible']);
    }

    public function getByUserId($userId)
    {
        return $this->query("SELECT * FROM experiances WHERE userFK = :id", ['id' => $userId]);
    }

    public function getByCompanyName($companyName)
    {
        return $this->query("SELECT * FROM experiances WHERE companyName = :id", ['id' => $companyName]);
    }
    
    public function getByPosition($position)
    {
        return $this->query("SELECT * FROM experiances WHERE position = :id", ['id' => $position]);
    }

    public function getBetweenDates($startD, $endD)
    {
        return $this->query("SELECT * FROM experiances WHERE startDate > :startD AND endDate > :endD" , ['startD' => $startD, 'endD' => $endD]);
    }
}