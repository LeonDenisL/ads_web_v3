<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$email = filter_input(INPUT_POST, 'email');


if($id && $email) {

    $sql = $pdo->prepare("UPDATE lista_emails SET email = :email WHERE id = :id");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index_email.php");
    exit;
    

} else {
    header("Location: index.php");
    exit;
}