<?php

abstract class Crud {

    protected $dbname;
    protected $table;

    public function __construct(PDO $param) {
        
        $this->dbname = $param;
    }

    abstract public function insert($post);

    abstract public function update($id);

    public function find($id) {
        $stmt = $this->dbname->prepare("select * from $this->table where id=$id");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delete($id) {
        $stmt = $this->dbname->prepare("DELETE FROM $this->table WHERE id = $id");
        return $stmt->execute();
    }

    public function getAll() {
        $stmt = $this->dbname->prepare("select * from $this->table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}
