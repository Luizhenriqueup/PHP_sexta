<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    <div>
         <h1>FAÇA O SEU PEDIDO ABAIXO</h1>
    <form method="post">
    <label for="nome">Nome do Cliente</label>
    <input type="text" name="Cliente"><br><br>
    <p>Produtos: Hamburgue, Refri, Salada, batata</p>
    <label for="nome">Produto Principal</label>
    <input type="select" name="Produto"><br><br>
    <p>Tamanho do seu pedido</p>
    <label for="pedido">Tamanho pequeno</label>
    <input type="radio" name="pequeno"><br><br>
    <label for="pedido">Tamanho Medio</label>
    <input type="radio" name="medio"><br><br>
    <label for="pedido">Tamanho grande</label>
    <input type="radio" name="Grande"><br><br>
    <p>Adicionais</p>
    <label for="adicionais">Carne</label>
    <input type="checkbox" name="Carne"><br><br>
    <label for="adicionais">Tomate</label>
    <input type="checkbox" name="Tomate"><br><br>
    <label for="adicionais">Gelo</label>
    <input type="checkbox" name="Gelo"><br><br>
    <button type="submit">enviar</button>
    </div>
</form>
</body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = ($post["nome"]);
    $nome = ($post["pedido"]);
    $nome = ($post["adicionais"]);
}






?>
</html>

