<?php

/* Temos 2 arquivos (classes and models) com classes com o mesmo nome,
o namespaces serve para evitar esse conflito, mostrando assim qual classe 
eu quero utilizar dentro dessas pastas/arquivos.


AVISO: o namespace tem que ser declarado dentro do arquivo que esta nas pastas
para sabermos diferenciar eles na hora de utilizar a class que por acaso tem os mesmo
nome dentro deles,  tirando a necessitade de ter que colocar o nome da classe de um deles
como Produto2.

servindo como um aviso EX: quero usar a class produtos cujo tem namespace classes.
*/

require 'classes/produto.php';
require 'models/produto.php';

// 1 forma de usar o namespace

/*
$produto = new \classes\Produto();
$produto->mostrarDetalhes();
*/

// 2 forma de utilizar o namespace 

use models\Produto as productModels;
use classes\Produto as productClasses;

$produto = new productClasses;
$produto->mostrarDetalhes();

echo "</br>";

$produto2 = new productModels;
$produto2->mostrarDetalhes();