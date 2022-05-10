<?php
    include './lib/mysql.php';
    $carros = listarJogos();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/games.css">
    <script src="./assests/js/script.js" defer></script>
    <title>Meus jogos</title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="logo">
        </figure>
        <ul>
            <li> <a href="./">Home</a></li>
            <li><a href="./lib/listar.php">Meus jogos</a></li>
            <li><a href="./cadastro.php">Cadastrar novo jogo</a></li>
        </ul>
    </header>
    <main>
        <table>
            <tr>
                <th class="cor1">Nome</th>
                <th class="cor2">Plataforma</th>
                <th class="cor1">Progresso</th>
                <th class="cor2">Nota</th>
            </tr>
            <?php
                for($i = 0; $i < count($games); $i++){
                    if(($i%2) !== 0 ){
                        echo '<tr class="cor2">';
                    }else {
                        echo '<tr>';
                    }
                        echo '<td>'. $games[$i]['nome'] .'</td>';
                        echo '<td>'. $games[$i]['plataforma'] .'</td>';
                        echo '<td>'. $games[$i]['progresso'] .'</td>';
                        echo '<td>'. $games[$i]['nota'] .'</td>';
                        echo '<td>
                            <button onclick="deletar('.$games[$i]['id'].')">Deletar</button>
                            <button onclick="editar('.$games[$i]['id'].')">Editar</button>
                        </td>';
                    echo '</tr>';
                }
            ?>  
        </table>
    </main>
    <footer>
    </footer>
</body>
</html>