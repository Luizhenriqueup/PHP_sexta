<?php
require_once __DIR__."/../config/Database.php";

class Cliente{
    private int $id;
    private string $nome;
    private string $email;
    private string $telefone;
    private PDO $conexao;

    public function __contruct(string $nome, string $email, string $telefone){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        //
        $database = new Database();
        $this->conexao = $database->conectar();
    }
    public function salvar(): bool {
    $sql = "INSERT INTO clientes (nome, email, telefone)
    values (:nome, :email, :telefone)";
    
    $stmt = $this->conexao->prepare($sql);

    $smt->bindParam(":nome", $this->nome);
    $smt->bindParam(":email", $this->email);
    $smt->bindParam(":telefone", $this->telefone);

    return $stmt->execute();
    }
    public function __destruct(){
        // Ao final do script, a conexão PDO será encerrada automaticamente.
    }
}


?>