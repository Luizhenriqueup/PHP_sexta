<?php
class database{
  private  $host = "localhost";
  private  $dbname = "sistema_clientes";
  private  $usuario = "root";
  private  $port = 3306;
  private  $senha = "1234";
  private ?PDO $conexao = null;

  public function conectar(): PDO{
    if ($this->conexao === null){
        try{
        $this->conexao = new PDO(
        "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8mb4",
        $this->usuario,
        $this->senha
    );
    echo "Conexão realizada com sucesso";
} catch (PDOExcepetion $erro){
    echo "Erro na conexão:" . $erro->getMessage();
}
    }
    return $this->conexao;
  }
}



?>