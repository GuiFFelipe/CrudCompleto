<?php
//Abre conexao com banco
include 'conexao.php';

//recebimento dos dados das váriaveis
$id = $_POST['id'];

//$recebendo_cadastros é onde puxo todos os dados
$recebendo_cadastros = "DELETE FROM tb_cliente WHERE id = '$id'";

        //query_cadastros = recebe como parametros
        //conexao do banco e dados do cadastros
        $query_cadastros = mysqli_query($connx, $recebendo_cadastros);

        //Faz voltar a página listagem.php
        header('location:listagem.php');
?>