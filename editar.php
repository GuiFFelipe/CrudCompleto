<?php

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$recebendo_cadastros = "UPDATE tb_cliente
SET nome = '$nome', 
email = '$email', 
telefone = '$telefone'  
WHERE id = $id";

$query_cadastros = mysqli_query($connx, $recebendo_cadastros) or die(mysqli_error($connx));

header('location: listagem.php');
