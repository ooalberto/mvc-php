<?php

namespace App\Models;

class Contact
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    public function fetchAll()
    {
        $query = "select * from contacts";
        return $this->db->query($query);
    }
}
