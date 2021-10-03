<?php
//inclui conexao com banco
include 'conexao.php';

//pegar dados da tabela
$buscar_cadastros = "SELECT * FROM tb_cliente";
//fazer busca dados da tabela através da query
$query_cadastros = mysqli_query($connx, $buscar_cadastros);

?>


<!doctype html>
<html lang="en">

<head>
    <title>Cadastros</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nome</th>
                    <th>email</th>
                    <th>telefone</th>
                </tr>
            </thead>

            <tbody>
                <?php
                //fetch array vai ficar buscando os dados array de cadastros
                while ($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
                    $id = $receber_cadastros['id']; //'id' é igual o nome que esta na tabela
                    $nome = $receber_cadastros['nome'];
                    $email = $receber_cadastros['email'];
                    $telefone = $receber_cadastros['telefone'];
                ?>

                    <tr>
                        <td><?php echo $id ?></td>
                        <form action="editar.php" method="POST">
                        <td> <input type="text" name="nome" value="<?php echo $nome ?>"></td>
                        <td> <input type="text" name="email" value="<?php echo $email ?>"></td>
                        <td> <input type="text" name="telefone" value="<?php echo $telefone ?>"></td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="submit" value="EDITAR">
                        </td>
                        </form>
                        <td>
                            <!--EXCLUIR-->
                            <form action="excluir.php" method="POST">
                                <!--hidden esconde dados do input-->
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <input type="submit" value="EXCLUIR">
                            </form>
                        </td>
                    </tr>
                <?php }; ?>
                <!--finalizou while-->
                <!--form de cadastro-->
                <div class="form-group">

                    <!--cadastro.php é onde tem codigo de salvar-->
                    <form action="cadastro.php" method="POST">
                        <td>
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-control" placeholder="nome" aria-describedby="helpnome">
                            <small id="helpnome" class="text-muted">Digite seu nome</small>
                        </td>


                        <td>
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="email" aria-describedby="helpemail">
                            <small id="helpemail" class="text-muted">Digite seu e-mail</small>
                        </td>


                        <td>
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone" aria-describedby="helptelefone">
                            <small id="helpetelefone" class="text-muted">Digite seu telefone</small>
                        </td>


                        <td>
                            <input type="submit" value="Cadastro" class="form-control">
                        </td>

                    </form>
                </div>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>