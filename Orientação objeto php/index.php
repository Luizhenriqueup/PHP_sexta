<?php
// Sempre importar arquivos das classes utilizadas
require_once('Cliente.php');
$cliente = new Cliente("Maria da silva", "mariga@gmail.com");
//$cliente-> nome = "Maria";
//$cliente-> email = "maria@gmail.com";

echo $cliente->nome;
echo $cliente->email;

// testando metodo da classe Produto
require_once('Produto.php');
$produto = new Produto();
$produto-> nome = "Arroz - 12g";
$produto-> preco = 12.5;

echo "<p> {$produto->exibirResumo()}</p>";
echo "<p>Desconto: {$produto->calcularDesconto(10)}</p>";


?>