<?php
require_once __DIR__ . '/BaseDao.php';

class CommentsDao extends BaseDao
{

    public function __construct()
    {
        parent::__construct('commnets', ['userFK', 'name', 'description', 'dateAdded', 'zIndex', 'isVisible']);
    }

    public function getByUserId($userId)
    {
        return $this->query("SELECT * FROM commnets WHERE userFK = :id", ['id' => $userId]);
    }

    public function getByName($name)
    {
        return $this->query("SELECT * FROM commnets WHERE name = :id", ['id' => $name]);
    }
    
    public function getByDateAdded($date)
    {
        return $this->query("SELECT * FROM commnets WHERE endDate = :id", ['id' => $endD]);
    }
}