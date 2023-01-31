<?php

// Agregação
// Acontece quando uma classe precisa de outra para executar uma ação, ou seja,
// uma classe utiliza a outra como parte de si

class Produtos {
    public $nome;
    public $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    // O valor a ser passado a esse metodo, será uma instancia de Produtos
    // Esse metodo espera como parametro uma instancia da classe Produto
    // necessitando dessa instancia para ser executada, e passando os valores instanciados (nome and carne), numa array.

    public function adiciona(Produtos $produto) {
        $this->produtos[] = $produto;
    }

    public function exibe() {
        foreach ($this->produtos as $produto) {
            echo $produto->nome."</br>";
            echo $produto->valor."<hr>";
        }
    }
}

$produto1 = new Produtos("Picanha", "100");
$produto2 = new Produtos("Tempero", "25");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();