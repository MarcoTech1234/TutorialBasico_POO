<?php

/* Oq e ?
    Serve para definismos um modelo a serem usados em outras classes.
    geralmente definindo metodos a serem implemestados nas classes que inplemetarem
    essa interface

Diferencia entre o abstract e interface : 
    O  abstract pode conter metodos/propiedades não abstract
ou seja pode não conter apenas "modelo" para serem seguidos
mais tambem contem metodos e valores que podem ser herdados EX: setSaldo e getSaldo
ja a interface não, apenas contém metodos modelos a serem seguidos por outras classe 
(ou seja,  os metodos a serem implementados pelas classes que a implementares essa classe interface).

*/

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

// inves de usar o extends no metodo herança, usamos o metod implements
// assim a classe noticia e obrigado a ter os metodos do crud declarados 
// sendo responsabilidade da classe que implementar a interface, criar a logica dos metodos  

class Noticias implements Crud {
    
    public function create($data) {
        // aqui vai a logica para criar uma noticia
    }

    public function read() {
        // aqui vai a logica para ler uma noticia
    }

    public function update() {
        // aqui vai a logica para atualizar uma noticia
    }

    public function delete() {
        // aqui vai a logica para deletar uma noticia
    }
}