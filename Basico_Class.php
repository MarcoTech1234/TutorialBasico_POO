<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar() {
        echo $this->nome. " tem ". $this->idade ." disse algo </br>";
    }
}

$rodrigo = new Pessoa();
//var_dump($rodrigo);
$rodrigo->nome = "Marco Antonio";//acessando o atributo nome e definindo um valor nele
$rodrigo->idade = 16;
$rodrigo->Falar(); //intanciando a classe e usando o metodo falar

// $this serve para acessar os valores/atributos dentro da classe ($this->name = esse nome)

