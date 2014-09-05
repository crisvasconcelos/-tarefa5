<?php

include_once 'Crud.php';

class Comida extends Crud {

    protected $id;
    protected $nome;
    protected $preco;
    protected $dbname;
    protected $table = 'cardapio';

    public function __construct($param) {
        parent::__construct($param);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function insert($post) {
        $stmt = $this->dbname->prepare("INSERT INTO $this->table(comida,precos) VALUES(:comida,:precos)");
        $stmt->bindParam(':comida', (trim($post['comida'])), PDO::PARAM_STR);
        $stmt->bindParam(':precos', (trim($post['precos'])), PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update($post) {

        $stmt = $this->dbname->prepare("UPDATE $this->table SET comida = :nome, precos = :preco WHERE id= :id");
        $stmt->bindParam(':id', trim($post['id']), PDO::PARAM_INT);
        $stmt->bindParam(':nome', trim($post['nome']), PDO::PARAM_STR);
        $stmt->bindParam(':preco', trim($post['preco']), PDO::PARAM_INT);
//        echo $stmt->queryString.$post['id'];
        return $stmt->execute();
    }

}
