<?php
include('conection.php');

if(!isset($_POST['exc'])) {
} else {
    $CPF = $_POST['exc'];

    $excluir = "delete from dados_aluguel where CPF = '$CPF'";
    mysqli_query($conexaoSQL, $excluir);
}

if(!isset($_POST['exc2'])) {
} else {
    $placa = $_POST['exc2'];

    $excluir = "delete from carros where placa = '$placa'";
    mysqli_query($conexaoSQL, $excluir);
}

$sql = "select * from carros order by valor";
$dados = mysqli_query($conexaoSQL, $sql);
$sql = "select * from dados_aluguel order by nome";
$dados2 = mysqli_query($conexaoSQL, $sql);

if(!isset($_POST['addcarro'])) {
} else {
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $dt_aluguel = $_POST['dt_aluguel'];
    $dt_devolucao = $_POST['dt_devolucao'];
    $imagem = $_POST['imagem'];
    $valor = $_POST['valor'];

    $adicionar = "insert into carros (placa, modelo, marca, ano, dt_aluguel, dt_devolucao, imagem, valor)
    values ('$placa','$modelo','$marca','$ano','$dt_aluguel','$dt_devolucao','$imagem','$valor')";
    mysqli_query($conexaoSQL, $adicionar);
}

if(!isset($_POST['addemprestimo'])) {
} else {
    $CPF = $_POST['CPF'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $adicionar = "insert into dados_aluguel (CPF, nome, telefone, endereco)
    values ('$CPF','$nome','$telefone','$endereco')";
    mysqli_query($conexaoSQL, $adicionar);
}

$sql = "select * from carros order by valor";
$dados = mysqli_query($conexaoSQL, $sql);
$sql = "select * from dados_aluguel order by nome";
$dados2 = mysqli_query($conexaoSQL, $sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="head">
        <br>
        <div class="row">
            <div class="col-3">
                <h1 class="tt">Jeep.</h1>
            </div>
            <div class="col-6">
                <nav>
                    <div class="menu">
                        <ul>
                            <a href="index.php">
                                <li>Home</li>
                            </a>
                            <a href="Emprestimo.php">
                                <li>Emprestimos</li>
                            </a>
                            <a href="sobre.html">
                                <li>Sobre</li>
                            </a>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <section style="color: black;">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="ppt">
                    Alugueis
                </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">CPF</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Endereço</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($dados2) > 0) {
                            while ($linha = mysqli_fetch_assoc($dados2)) {
                        ?>

                                <tr>
                                    <td><?= $linha['CPF'] ?></td>
                                    <td><?= $linha['nome'] ?></td>
                                    <td><?= $linha['telefone'] ?></td>
                                    <td><?= $linha['endereco'] ?></td>
                                    <td>
                                        <form action="" method="post"><button value="<?= $linha['CPF'] ?>" name="exc" class="btn btn-danger">Excluir</button></form>
                                    </td>
                                </tr>

                        <?php }
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="row">
                <div class="col-12">
                    <a href="adicionar emprestimo.html"><button class="btn btn-primary">ADICIONAR</button></a>
                </div>
            </div>


            <div class="col-12">
                <h1 class="ppt">
                    Carros
                </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Placa</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Valor</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($dados) > 0) {
                            while ($linha = mysqli_fetch_assoc($dados)) {
                        ?>

                                <tr>
                                    <td><?= $linha['placa'] ?></td>
                                    <td><?= $linha['modelo'] ?></td>
                                    <td><?= $linha['marca'] ?></td>
                                    <td><?= $linha['ano'] ?></td>
                                    <td><?= $linha['valor'] ?> R$</td>
                                    <td>
                                        <form action="" method="post"><button value="<?= $linha['placa'] ?>" name="exc2" class="btn btn-danger">Excluir</button></form>
                                    </td>
                                </tr>

                        <?php }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="adicionar carros.html"><button class="btn btn-primary">ADICIONAR</button></a>
                </div>
            </div>
        </div><br><br>
    </section>


    <footer>
        <p><b>Copyright Jeep 2022</b> - Todos os direitos reservados.</p>
    </footer>

</body>

</html>