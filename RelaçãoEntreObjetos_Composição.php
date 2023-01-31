<?php

/*  Composição
    Na composição, uma classe cria a instancia de outra classe dentro de si propria, sendo assim
    quando ela for destruida, a outra classe tambem será.
    */
    
class Pessoa {
    public function atribuirNome($nome) {

        return "o nome da pessoa é ".$nome;
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    // Agora estamos instanciando a classe pessoa, dentro da classe exibe

    function __construct($nome) {

        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome() {

        echo $this->pessoa->atribuirNome($this->nome);
    }
}

$exibe = new Exibe("marco");
$exibe->exibeNome();