<?php

    function conecta() {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = '';
        $mysqli = mysqli_connect($host, $user, $password, $database);

        if (mysqli_connect_errno()) {
            return NULL;
        }else {
            return $mysqli;
        }
    }

    function listarJogos() {
        $lista = [];
        $query = 'SELECT id, nome, plataforma, progresso, nota FROM games;';
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
                while ($row = mysqli_fetch_row($result)) {
                    // aqui estamos pegando o objeto $row e tranformando-o em um
                    // objeto carro, na mesma forma que iremos utilizar na página
                    // listar carros.
                   $jogo = array('id' => (INT) $row[0],
                    'nome' => $row[1], 'plataforma' => $row[2],
                    'progresso' => (INT) $row[3], 'nota' => (FLOAT) $row[4]
                    );
                    array_push($lista, $jogo);
                }
            }
        }
        return $lista;
    }
?>