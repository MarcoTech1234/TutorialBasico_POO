<?php

/*
    Esses que estão com ok, ja foram vistos, agora vamos ver os outros metodos magicos

clone - ok
construct - ok
invoke -> é chamado quando um script tenta chamar um objeto como uma função
tostring -> permite que uma classe decida como se comportar quando convertida para uma string.
__get() -> é utilizado para ler dados de propriedades inacessíveis (private ou protected) ou propriedades inexistentes.
__set() -> é executado ao escrever dados em propriedades inacessíveis (private ou protected) ou propriedades inexistentes.

*/

class Pessoa {
    public $dados = array();

    /*como não temos acesso, ao atributo devido ele ser privado, podemos
    permitir acesso a esse atribuo privado atraves do __set, sem saber o nome do objeto,
    O primeiro parametro "nome" sera atributo que vai receber o valor
    sendo ele referencia na linha 30 (ele vai levar o nome do objeto acessado), 
    o 2, o valor que sera passado, e depois disso vamos colocar o valor do nome private.
    (o set recebera o nome do atributo referido, e o seu valor, sem existir tal objeto, como podemos ver,
    quando definimos idade que vai ser armazenada em $nome, com um valor 50 = $valor.
    
    Resumindo, o set pega todas os acessos de objetos, sendo o nome e o valor deles,
    sem mesmo esses objetos existiram, assim o set pega eles e armazena no dados EX:)*/

    public function __set($nome, $valor) {
        $this->dados[$nome] = $valor;
    }

    /* Ele so recebe um parametro, que e o nome do atributo acessado nas linhas abaixo,
    e demostra o valor associado ao nome desse indice, sendo algo bem parecido com oo set,
    ele pega o objeto acessado e mostra seu valor EX: linha 47 até 49*/

    public function __get($nome) {
        return $this->dados[$nome];
    }

    // Esse metodo e chamado quando imprimirmos o objeto pessoa(objeto instanciado)
    // define oq irá imprimir quando for chamado ao objeto instanciado
    
    public function __tostring() {
        return "Tentei imprimir o objeto";
    }

    // Ele e chamado quando tentamos utilizar um objeto como uma função
    
    public function __invoke() {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();

/* __set */

$pessoa->nome = "Marco";
$pessoa->idade = 50;
$pessoa->sexo = "M";

/* __get */

// echo $pessoa->nome."</br>";
// echo $pessoa->idade."</br>";
// echo $pessoa->sexo."</br>";


/* tostring */

// echo $pessoa;

/* __Invoke 
    Chamando um objeto como uma função */

echo $pessoa();

//var_dump($pessoa);

/* Conseguimos passar um valor para um objeto private fora da classe, sem usar o metodo Set
mais se tentar mostrar o valor nome atraves do "echo $pessoa->nome" não irá funcionar pois ele ainda e um objeto private
mais ai entra outro metodo magico __get */
