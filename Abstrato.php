<?php

/*classes e metodos abstratos 
As classes abstratas servem como “modelo” para outras classes que dela herdem, não podendo ser instanciada por si só
Para ter um objeto de uma classe abstrata é necessário criar uma classe mais 
especializada herdando dela e então instanciar essa nova classe
Os métodos da classe abstrata devem então serem sobrescritos nas classes filhas.

As classes abstratas sevem como "modelo" para as classes que herdam dela
e os metodos abstratos dessa classe não tem codificação, mais tem que ser declaradas
e implemetados na classe que herda dessa classe abstrata, servindo como um modelo de metodo abstrato 
que sempre deve ser seguido e implementados nas classes que o herdam, 

AVISO, AS CLASSES ABSTRATAS NÃO PODEM SER INSTANCIADAS, 
E TODOS OS METODOS ABSTRATOS DEVEM ESTAR PRESENTES/DECLARADOS NA
CLASSE QUE ESTA HERDANDO ESSE MODELO*/


abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);

}

class Itau extends Banco {

    public function Sacar($s) {
        $this->saldo -= $s;
        echo "<hr> Sacou: ". $s;
    }

    public function Depositar($d) {
        $this->saldo += $d;
        echo "<hr> Depositou: ". $d;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Depositar(900);
echo "<hr> Saldo: ".$itau->getSaldo();
