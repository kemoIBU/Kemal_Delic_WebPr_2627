<?php
require_once __DIR__ . '/BaseDao.php';

class UserDao extends BaseDao
{
    private const PUBLIC_COLUMNS = "userPK, name, surname, email, description, dateOfBirth, city, country";

    public function __construct()
    {
        parent::__construct('users', ['name', 'surname',  'description', 'email',  'dateOfBirth', 'password',  'city', 'country']);
    }


    public function get_by_id($id)
    {
        return $this->query_unique("SELECT " . self::PUBLIC_COLUMNS . " FROM users WHERE id = :id", ['id' => $id]);
    }

    /** Includes the password hash – used only to check a login. */
    public function get_by_email($email)
    {
        return $this->query_unique("SELECT * FROM users WHERE email = :email", ['email' => $email]);
    }

    public function getBySurname($name)
    {
        return $this->query("SELECT * FROM users WHERE surname = :surname", ['surname' => $name]);
    }
}