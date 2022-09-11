<?php
include('conection.php');

$sql = "select * from carros order by valor";
$dados = mysqli_query($conexaoSQL, $sql);
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

    <header>
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

        <div class="row">
            <div class="col-4">
                <div class="dados_inc">
                    <h1>COMPASS</h1>
                    <p>Explore the actual teachings of the great explorer of the truth</p>
                    <a href="#veiculos"><button>Cofira todos</button></a>
                </div>
            </div>
            <div class="col-8">
                <img class="img_inicial" src="imagens/jeep-compass.webp" alt="">
            </div>
        </div>
        <h2 class="txt_compass">
            COMPASS
        </h2>
    </header>

    <section id="veiculos">
        <h1 class="ppt" >Veiculos</h1>
        <div class="row justify-content-center">


            <?php if (mysqli_num_rows($dados) > 0) {
                while ($linha = mysqli_fetch_assoc($dados)) {
            ?>

                    <div class="col-4">
                        <div class="cardd">
                            <img src="<?= $linha['imagem'] ?>" alt="">
                            <h2>
                                <?= $linha['marca'] ?> <?= $linha['modelo'] ?>
                            </h2>
                            <h5>
                                Alugue agora por
                            </h5>
                            <h1>
                                <?= $linha['valor'] ?> R$
                            </h1>
                            <h5>
                                Periodo de
                            </h5>
                            <h4>
                                <?= date('d/m/Y', strtotime($linha['dt_aluguel']))  ?> a <?= date('d/m/Y', strtotime($linha['dt_devolucao'])) ?>
                            </h4>
                            <button value="<?= $linha['placa']?>">Alugue agora</button>
                        </div>
                    </div>

            <?php }
            }
            ?>


        </div>
    </section>

    <footer>
        <p><b>Copyright Jeep 2022</b> - Todos os direitos reservados.</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>