<?php
require_once __DIR__ . '/BaseDao.php';

class EducationsDao extends BaseDao
{

    public function __construct()
    {
        parent::__construct('educations', ['userFK', 'schoolName',  'startDate', 'endDate', 'description', 'zIndex', 'isVisible']);
    }

    public function getByUserId($userId)
    {
        return $this->query("SELECT * FROM educations WHERE userFK = :id", ['id' => $userId]);
    }

    public function getBySchoolName($schoolName)
    {
        return $this->query("SELECT * FROM educations WHERE schoolName = :id", ['id' => $schoolName]);
    }
    
    public function getBetweenDates($startD, $endD)
    {
        return $this->query("SELECT * FROM educations WHERE startDate > :startD AND endDate > :endD" , ['startD' => $startD, 'endD' => $endD]);
    }
}