<?php
    
    $lista = []; //vetor
    $games = array('nome'=> 'Sleeping Dogs', 'plataforma' => 'PlayStation 4', 'progresso' => 'zerado', 'nota' => 8); 
    // acima é um objeto, com as propriedades
    array_push($listar, $games);
    // adiciona mais um jogo na lista
    $games = array('nome'=> 'Legend of Zelda: Breath of the Wild', 'plataforma' => 'Nintendo Switch', 'progresso' => 'jogando', 'nota' => 10); 
    array_push($listar, $games);

    function exportaLista(){
        return $GLOBALS['lista'];
    }

?>