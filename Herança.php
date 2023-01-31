<?php
/* Herança é um recurso que permite que classes compartilhem atributos
e metodos afim de reaprovertar codigos oucomportamentos generalizados*/

//Class com atributos e metodos genericos que podem ser herdados em 
//em outras classes com metods especificos Ex:

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function  Andar() {
        echo "Andou demais, vrum ";
    }

    public function Parar() {
        echo "olha o brek, dan ran !!!";
    }
}

//Class hendando valores genericos com o (extends) fazendo metodos 
// espeficos daquele veiculo.

class Carro extends Veiculo {

    public function ligarLimpador() {
        echo "Limpando logo em 123 </br> ";
    }
}

class Moto extends Veiculo {

    public function darGrau() {
        echo "Olha o Grau, booo! </br>";
    }
}

$carro = new Carro();
$carro->modelo = "Porche";
$carro->cor = "Roxo";
$carro->ano = 23;
$carro->Andar();
echo "</br>";
$carro->ligarLimpador();
var_dump($carro);

$moto = new Moto();
$moto->modelo = "Biz";
$moto->cor = "Vermelho";
$moto->ano = 11;
echo "</br>";
echo "</br>";
$moto->Andar();
echo "</br>";
$moto->darGrau();
var_dump($moto);