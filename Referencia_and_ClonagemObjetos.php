<?php

// Referencia 

class Pessoa {

    public $idade;

    // Esse metodo magico (__clone) e inicializado 
    // quando e utilizado a palavra chave clone Como e demonstrado mais 
    // a baixo na parte Clonagem

    public function __clone() {
        echo "Clonagem de Objetos com Sucesso! </br>";
    }
}

/* se tentar fazer uma clonagem dessa forma e depois pedimos para mostrar a
idade da pessoa, vai dar como resultado 35, pois a pessoa2 não é uma instancia
da classe Pessoa, pessoa2 e um objeto que faz referencia ao objeto pessoa. 
(fazendo uma referencia da instancia da $pessoa, assim dizendo que a nova idade da $pessoa que esta 
sendo referencia pela $pessoa2 passando o valor de 35) EX:

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade;

*/

// Clonagem

/* Nessa forma agora, estamos fazendo a pessoa2 ser um clone da pessoa
*/ 
$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa2->idade;