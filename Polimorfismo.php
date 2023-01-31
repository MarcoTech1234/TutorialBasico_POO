<?php
// tratas-se sobre rescrever/substituir 
// um metodo herdado da classe pai EX:

class Animal {
    public function Andar() {
        echo "O animal andou";
    }

    public function Correr() {
        echo "O animal Correu";
    }
}

// Se voce desativar esse andar, a chamado do
// metodo abaixo vai se referenciar ão metodo de Andar da classe Pai.

class Cavalo extends Animal {

    public function Andar() {
        $this->Correr();
    }
}

$animal = new Cavalo();
$animal->Andar();