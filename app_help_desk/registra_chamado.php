<?php

session_start();

$arquivo = fopen('../../app_help_desk/arquivo.hd','a');

if ($arquivo) {
    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $descricao = str_replace('#','-',$_POST['descricao']);

    $texto = $_SESSION['id'].'#'.$titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;

    if(fwrite($arquivo,$texto)) {
    fclose($arquivo);
    header('Location: abrir_chamado.php?status=sucesso');
    } else {
        fclose($arquivo);
        header('Location: abrir_chamado.php?status=erro');
      }
} else {
    header('Location: abrir_chamado.php?status=erro');
}    
?>