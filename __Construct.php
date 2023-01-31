<?php

class Login{

    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar() {
        if($this->email == "marco" and $this->senha == "123"):
            echo "Logado com sucesso";
        else: 
            echo "dados invalidos";
        endif;
    }
}

$logar = new Login("marco()/", "123", "Marco Antonio" );
$logar->Logar();
//Objetos filtrados dentro da class
echo "</br></br>".$logar->getEmail();
echo "</br>".$logar->getSenha();
echo "</br>".$logar->getNome();
echo "</br></br> estou usando o metodo <b>construct</b>";
