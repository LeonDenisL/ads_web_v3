<?php

// CONECTANDO COM O BANCO DE DADOS
require 'config.php';

// Pegando o ID e lendo o ID via botão

$id = filter_input(INPUT_GET, 'id');

// VERIFICANDO E APAGANDO OS DADOS DO ID SELECIONADO

if ($id){

  $sql = $pdo->prepare("DELETE FROM lista_emails WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();

}

// REDIRENCIONANDO PARA URL ....
header("Location: index_email.php")

?>
