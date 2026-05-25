<?php
// Sempre importar arquivos das classes utilizadas
require_once('Cliente.php');
$cliente = new Cliente("Nome:Maria da silva | ", " Email:maria@gmail.com", " | Telefone: +55 9874-5612", "12345678");
//$cliente-> nome = "Maria";
//$cliente-> email = "maria@gmail.com";

// EDITA ATRIBUTO $cliente->telefone = "76549884"; 
echo $cliente->nome;
echo $cliente->email;
echo $cliente->telefone;
echo "<p>Chamada do metodo apresentar: {$cliente->apresentar()}</p>";
unset($cliente);
// testando metodo da classe Produto
require_once('Produto.php');
$produto = new Produto();
$produto-> nome = "Arroz - 12g";
$produto-> preco = 12.5;

echo "<p> {$produto->exibirResumo()}</p>";
echo "<p>Desconto: {$produto->calcularDesconto(10)}</p>";

require_once('Usuario.php');

$usuario = new Usuario("12345678");
$usuario->definirSenha("12345678");

if ($usuario->verificarSenha("12345678")) {
    echo "Senha correta";
} else {
    echo "Senha incorreta";
}
?>