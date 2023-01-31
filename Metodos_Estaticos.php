<?php

// Com metodos estaticos não precisamos instanciar a classe para acessar os objetos 
// dessa classe EX:
// Isso tambem quer dizer que não podemos acessar esses valores estaticos 
// atraves de instanciar a classe, pois metodos estaticos pertence a classe.



class Login {

    public static $user;

    // AVISO: objetos estaticos não podem ser acessados atraves do $this
    // pois usamos o $this quando instanciamos uma classe, então ão inves do
    // $this usamos o self que referencia ao objeto daquele scopo 

    public static function verificaLogin() {
        echo "O usuario".self::$user." esta logado";
    }

    public function sairSistema() {
        echo "</br></br>Usuario saiu";
    }
}

Login::verificaLogin();
Login::$user = "admin";

$login = new Login();
$login->sairSistema();
