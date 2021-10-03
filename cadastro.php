<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "INSERT INTO 
tb_cliente
VALUES ('',
        '$nome',
        '$email',
        '$telefone')";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //Faz voltar a página listagem.php
        header('location:listagem.php');
?>
