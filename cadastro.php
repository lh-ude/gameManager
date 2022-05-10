<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assests/css/reset.css">
    <link rel="stylesheet" href="./assests/css/cadastro.css">
    <script src="./assests/js/script.js" defer></script>
    <title>Cadastro</title>
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
    <form action="./lib/validar.php" method="post">
            <p>
                <label> Nome: </label>
                <input name="nomeJogo" type="text" id="boxNomeJogo">
            </p>

            <p>
                <label> Plataforma: </label>
                <select name="plataforma" id="boxPlataforma" >
                    <option value="Nintendo Switch">Nintendo Switch</option>
                    <option value="PlayStation 4">PlayStation 4</option>
                    <option value="Steam">Steam</option>
                </select>
            </p>

            <p>
                <label> Progresso: </label>
                <select name="progresso" id="boxProgresso">
                    <option value="zerado">Zerado</option>
                    <option value="platinado">Platinado</option>
                    <option value="jogando">Jogando</option>
                    <option value="não iniciado">Não iniciado</option>
                </select>
            </p>

            <p>
                <label> Nota: </label>
                <select name="nota" id="boxNota">
                    <option value="1">1 estrela</option>
                    <option value="2">2 estrelas</option>
                    <option value="3">3 estrelas</option>
                    <option value="4">4 estrelas</option>
                    <option value="5">5 estrelas</option>
                </select>
            </p>

            <p>
                <input type="submit" value="Cadastrar">
                <input type="button" value="Cancelar" onclick="bt_cancelar()">
            </p>

        </form>
    </main>
    <footer>
    </footer>
</body>
</html>