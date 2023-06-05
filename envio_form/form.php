<?php 
include '../string.php';

$nome_form = addslashes($_POST["nome"]);
$email_form = addslashes($_POST["email"]);
$celular_form = addslashes($_POST["celular"]);
$mensagem_form = addslashes($_POST["mensagem"]);

$to = $email;
$subject = $_POST["nome_form"];

echo true;
?>