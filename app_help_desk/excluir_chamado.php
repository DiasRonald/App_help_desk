<?php

session_start();

if ($_SESSION['perfil_id'] != 1) {
    header('Location: consultar_chamado.php');
    exit;
}

if (isset($_POST['chamado_id'])) {
    $chamado_id = $_POST['chamado_id'];
    
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'r');
    $chamados = array();

    while (!feof($arquivo)) {
        $registro = fgets($arquivo);
        $chamado_dados = explode('#', $registro);

        if ($chamado_dados[0] != $chamado_id) {
            $chamados[] = $registro;
        }
    }

    fclose($arquivo);

    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'w');
    foreach ($chamados as $chamado) {
        fwrite($arquivo, $chamado);
    }
    fclose($arquivo);

    header('Location: consultar_chamado.php');
} else {
    header('Location: consultar_chamado.php');
}

?>
