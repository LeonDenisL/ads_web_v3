<?php 

// CONECTANDO COM O BANCO DE DADOS
require 'config.php';

$email = $_REQUEST['email'];
		
// INSERINDO DADOS NO BANCO DE DADOS
$pdo->query("INSERT INTO `lista_emails` (email) VALUES ('$email')"); 
   
header("Location: index.php") 


?>