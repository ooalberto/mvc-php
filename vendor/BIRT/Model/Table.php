<?php

namespace BIRT\Model;

abstract class Table
{
    protected $db;
    protected $table;
    // protected $id;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    public function fetchAll()
    {
        $query = "select * from {$this->table}";
        return $this->db->query($query);
    }

    public function find($id)
    {
        $this->id = $id;
        $query = "select * from {$this->table} where id =:id";
        $stmt = $this->db->prepare(($query));
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
