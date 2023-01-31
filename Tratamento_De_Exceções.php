<?php

/* uma exceção e uma ocorrencia anormal que afeta o funcionamento de uma aplicação
Exception é uma classe base para todas as Exceptions -> message, code, file, line.
*/

class Newsletter {

    public function cadastrarEmail($email) {

        /*Nessa função ele esta verificando se essa condição EMAIL e valida
        se o email não estiver seguindo o padrão de um email, ele vai entrar na if, e nela vamos lançar uma exceção 
        com throw new Exception, fazendo assim lançar uma exceção  com uma mensagem junto com um codigo de ERRO.
        
        Exception: classe base para lançar exceções no php*/

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Erro email é invalido", 16);
        else:
            echo "Email cadastrado com sucesso!";
        endif;
    }

}

$newslwtter = new Newsletter();

/* Agora que lançamos a exceção, devemos pega-la e tratar essa exceção EX
o try vai tentar executar o codigo, e caso ele não consiga ela vai cair no catch,
capturando todas as exceções que podem ser geradas nesse metodo Exception
no objeto $e, assim contendo nele algumas informações da exceção que lançamos na linha 18 */

try {

$newslwtter->cadastraremail("contato@");

}catch(Exception $e) {

    // todas as propriedades que podemos exibir do exception

    echo "Mensagem: ".$e->getMessage()."</br>";
    echo "Codigo: ".$e->getCode()."</br>";
    echo "Linha: ".$e->getLine()."</br>";
    echo "Arquivo: ".$e->getFile()."</br>";

}
