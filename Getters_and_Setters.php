<?php

class Login{

    private $email;
    private $senha;

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

$logar = new Login();
//Valores inseridos atraves da instancia que fizemos entre o $logar e a class,
// que passa os valores que retornam como objetos pela class que filtra e testa eles
$logar->setEmail("marco()/");
$logar->setSenha("123");
$logar->Logar();
//Objetos filtrados dentro da class
echo "</br>".$logar->getEmail();
echo "</br>".$logar->getSenha();
