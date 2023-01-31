<?php

/* Criamos uma associação, que e quando um objeto "utiliza" outro,
porem, sem eles dependerem um do outro */

// Uma forma de utilização do modo referencia que foi mostrado no
// arquivo Referencia_and_Clonagem.php

class Pedido {
    public $numero;
    public $cliente;
}
class Cliente {
    public $nome;
    public $endereço;
}

$cliente =  new Cliente();
$cliente->nome = "Rodrigo Oliveira";
$cliente->endereço = "Rua xxx, Numero: 123";

$pedido = new Pedido();
$pedido->numero = "125";

// Digamos que quem faz o pedido e o cliente, então fazemos uma associação/referencia
// onde o cliente do pedido faz uma referencia a instancia ao $cliente
$pedido->cliente = $cliente;

$dados = array(

    'numero' => $pedido->numero,

    // como o meu cliente de $pedido faz uma referencia a instancia $cliente
    // quando eu acesssar o objeto nome do meu pedido, vai mostrar o nome que foi passado na instancia $cliente
    // tornando meu cliente do $pedido, um objeto qu faz refencia aos valores instanciados em $clientes

    'nome_cliente' => $pedido->cliente->nome,
    'endereço_cliente' => $pedido->cliente->endereço
);

var_dump($dados);