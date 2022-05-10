<?php
    var_dump($_POST);
    if(isset($_POST) && isset($_POST['nome']) && isset($_POST['plataforma'])
        && isset($_POST['progresso']) && isset($_POST['nota'])){
        echo 'OK';
    } else {
        header('Location: ../cadastro.php?erro=1');
    }
?>