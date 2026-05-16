<?php
class Produto{
    public string $nome;
    public float $preco;
    //metodo que retorna string (texto)

    public function exibirResumo(): string{
        return "Produto:  Nome: {$this->$nome}, Preço: {$this->$preco}";
    }
}

// Metodos com parametros
    public function calcularDesconto(float $percentual): float{
    return ($this->preco * $percentual)/ 100;
}



?>