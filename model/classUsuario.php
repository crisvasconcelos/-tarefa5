<?php

include 'Crud.php';

class Usuario extends Crud {

    protected $id;
    protected $login;
    protected $senha;
    protected $dbname;
    protected $table = 'usuario';

    public function __construct($param) {
        parent::__construct($param);
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function insert($post) {
        
        $stmt = $this->dbname->prepare("INSERT INTO $this->table(login,senha) VALUES(:login,md5(:senha))");
        $stmt->bindParam(':login', trim($post['login']), PDO::PARAM_STR);
        $stmt->bindParam(':senha', trim($post['senha']), PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update($post) {
        $stmt = $this->dbname->prepare("UPDATE $this->table SET login = :login, senha = md5(:senha) WHERE id= :id");
        $stmt->bindParam(':id', trim($post['id']), PDO::PARAM_INT);
        $stmt->bindParam(':senha', trim($post['senha']), PDO::PARAM_STR);
        $stmt->bindParam(':login', trim($post['login']), PDO::PARAM_STR);
        return $stmt->execute();
    }

}
