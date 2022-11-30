<?php

// CONECTANDO COM O BANCO DE DADOS
$usuario = "root"; // nome do usuário do bando de dados
$senha = ""; // senha do usuário do bando de dados
$database = "ocau"; // nome do banco de dados
$host = "localhost"; // local onde está o banco de dados

$mysqli = new mysqli($host, $usuario, $senha,$database);

if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados " . $mysqli->error);
}

?>