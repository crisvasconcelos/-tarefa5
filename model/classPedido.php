<?php

include_once 'Crud.php';

class Pedido extends Crud {

    protected $id;
    protected $mesa;
    protected $quantidade;
    protected $dbname;
    protected $table = 'pedidos';
    protected $comida;

    public function getId() {
        return $this->id;
    }

    public function getMesa() {
        return $this->mesa;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getDbname() {
        return $this->dbname;
    }

    public function getTable() {
        return $this->table;
    }

    public function getComida() {
        return $this->comida;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setMesa($mesa) {
        $this->mesa = $mesa;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setDbname($dbname) {
        $this->dbname = $dbname;
    }

    public function setTable($table) {
        $this->table = $table;
    }

    public function setComida($comida) {
        $this->comida = $comida;
    }

    public function insert($post) {
        $stmt = $this->dbname->prepare("INSERT INTO $this->table(mesa,quantidade,comida) VALUES(:mesa,:quantidade,:comida)");
        $stmt->bindParam(':mesa', (trim($post['mesa'])), PDO::PARAM_STR);
        $stmt->bindParam(':quantidade', (trim($post['quantidade'])), PDO::PARAM_STR);
        $stmt->bindParam(':comida', (trim($post['comida'])), PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function update($post) {
        $stmt = $this->dbname->prepare("UPDATE $this->table SET mesa= :mesa,quantidade= :quantidade,comida = :comida WHERE id= :id");
        $stmt->bindParam(':id', trim($post['id']), PDO::PARAM_INT);
        $stmt->bindParam(':mesa', trim($post['mesa']), PDO::PARAM_STR);
        $stmt->bindParam(':quantidade', trim($post['quantidade']), PDO::PARAM_STR);
        $stmt->bindParam(':comida', trim($post['comida']), PDO::PARAM_INT);

               return $stmt->execute();
    }

    public function getAll() {
        $stmt = $this->dbname->prepare("select cardapio.comida as nome, $this->table.* from $this->table join cardapio on $this->table.comida=cardapio.id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
