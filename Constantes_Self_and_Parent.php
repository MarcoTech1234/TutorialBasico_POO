<?php

/*Self serve para se referenciar a constante daquele
scopo que foi instanciado (daquela classe), ja o Parent 
referencia a constante da classe Pai (a classe que esta sendo herdada por outra/
sendo a classe generica, geralmente)*/

class Pessoa {
    const nome = "Marco";

    public function exibirNome() {
        echo self::nome;
    }
}

// Se quiser ver troque o parent por self e execute, e vice versa.
class Rodrigo extends Pessoa {
    const nome = "Arthur";

    public function exibirNome() {
        echo parent::nome;
    }
}

$rodrigo = new Rodrigo;
$rodrigo->exibirNome();