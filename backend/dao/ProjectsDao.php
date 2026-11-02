<?php
require_once __DIR__ . '/BaseDao.php';

class ProjectsDao extends BaseDao
{
    

    public function __construct()
    {
        parent::__construct('projects', ['userFK', 'projectName', 'description', 'zIndex', 'isVisible']);
    }


    

    public function getByProjectName($pName)
    {
        return $this->query_unique("SELECT * FROM projects WHERE projectName = :id", ['id' => $pName]);
    }
    public function getByUserId($userId)
    {
        return $this->query("SELECT * FROM projects WHERE userFK = :id", ['id' => $userId]);
    }
    
}