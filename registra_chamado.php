<?php

  session_start();


  //estamos trabalhando na montagem do texto
  $titulo = str_replace('#', '-', $_POST['titulo']);
  $categoria = str_replace('#', '-', $_POST['categoria']);
  $descricao = str_replace('#', '-', $_POST['descricao']);

  //implode('#', $_POST);

  $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;


  //abrindo o arquivo e escrevendo o texto
  $arquivo = fopen('../../app_help_desk_private/arquivo.hd', 'a');

  fwrite($arquivo, $texto);

  //fechando o arquivo
  fclose($arquivo);

  header('Location: abrir_chamado.php');

?>