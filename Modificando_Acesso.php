<?php

/* public - fará com que não haja ocultação nenhuma, toda propriedade ou metodo declarado
com o public serão acessiveis por todos que quiserem acessá-los (sendo acessivel fora ou dentro do scopo da classe)

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou
metodos protegidos como se fossem públicos. (so e possivel acessar esse atributo dentro da classe e das
classes que herdam esses atributos)

private - ao contrario do public, esse modificador faz com que qualquer método ou propriedade
seja visivel só e somente só pela classe que a declarou (e como o protected so que inves de poder acessa-lo atraves de outra classe
com o metodo extends, ele so é acessivel pelo scopo daquela classe que ele esta, somente no scopo da classe)*/


class Veiculo {
    protected $modelo;
    private $cor;
    public $ano;

    public function  Andar() {
        echo "Andou demais, vrum ";
    }

    public function Parar() {
        echo "olha o brek, dan ran !!!";
    }

    public function setCor($e) {
        $this->cor = $e;
    }

    public function getCor() {
        return $this->cor ;
    }

}


class Carro extends Veiculo {

    public function ligarLimpador() {
        echo "Limpando logo em 123 </br> ";
    }
}

class Moto extends Veiculo {

    public function setModelo($e) {
        $this->modelo = $e;
    }

    public function getModelo() {
        return $this->modelo ;
    }

    public function darGrau() {
        echo "Olha o Grau, booo! </br>";
    }
}

// public
$carro = new  Carro();
$carro->ano = 24;
echo "<b>".$carro->ano." o ano do carro</b>";
echo "</br>";
var_dump($carro);
echo "</br></br>";


// protected

$moto = new Moto();
$moto->setModelo("HILUX");
echo "<b>".$moto->getModelo()." esse e o modelo da moto</b>";
echo "</br>";
var_dump($moto);
echo "</br></br>";

// private

$veiculo = new Veiculo();
$veiculo->setCor("Rosa");
echo "<b>".$veiculo->getCor()." essa e a cor do veiculo</b>";
echo "</br>";
var_dump($veiculo);
echo "</br></br>";

// AVISO ISSO TAMBEM SÃO VALIDOS PARA OS METODOS/FUNCTION.
