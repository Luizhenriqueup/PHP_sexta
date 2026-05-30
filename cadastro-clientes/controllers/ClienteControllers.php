<?php
require_once __DIR__ . "/../models/Cliente.php";

class ClienteController{
    public function cadastrar(): array{
        if($_SERVER["REQUEST_METHOD"]!== "POST"){
            return[
                "sucesso" => false,
                "mensagem" => "Requisição inválida."
            ];
        }

        $nome = trim($_POST["nome"]?? "");
        $nome = trim($_POST["email"]?? "");
        $nome = trim($_POST["telefone"]?? "");

        if(empty($nome) || empty($email) || empty($telefone)){
            return[
                "sucesso" => false,
                "mensagem" => "Todos os campos devem ser preenchidos."
            ];
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return[
                "sucesso" => false,
                "mensagem" => "Informe um e-mail válido."
            ];
        }
        try{
            $cliente = new Cliente($nome, $email, $telefone);
            $cliente ->salvar();

            return[
                "sucesso" => true,
                "mensagem" => "Cliente cadastrado com sucesso!"
            ];
        }catch (PDOExcepetion $erro){
            return[
                "sucesso" => false,
                "mensagem" => "Erro ao cadastrar cliente. Verifique se o e-mail ja esta cadastrado."
            ];
        }
    }
}

?>