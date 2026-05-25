<?php
require_once('Usuario.php');
class Cliente extends Usuario{
    public string $nome;
    public string $email;
    public string $telefone;

    //contrutor da classe
    public function __construct(string $nome, string $email, string $telefone, string $senha){
        parent::__construct($senha);
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    public function apresentar(): string{
       return "<p>Olá {$this->nome}!</p>";
    }

    public function __destruct(){
        echo "<p> Destruindo o cliente {$this->nome}</p>";
    }
}
?>