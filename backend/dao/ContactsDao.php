<?php
require_once __DIR__ . '/BaseDao.php';

class ContactsDao extends BaseDao
{
    public function __construct()
    {
        parent::__construct('contacts', ['userFK','urlLink']);
    }

    public function getByUserId($userId)
    {
        return $this->query("SELECT * FROM contacts WHERE userFK = :id", ['id' => $userId]);
    }
}