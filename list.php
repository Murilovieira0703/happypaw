<?php
include('global.php'); 
include('protectadm.php');
include('conexao.php');

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Paw | Listagem Animal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/odometer.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <style>
        td:first-letter{
            text-transform: uppercase;
        }
        .pag{
            justify-content: center;
            display: flex;
        }
        .back{
            margin-right: 15px;
            margin-top: 5px;
        }
        .btn{
            padding: 12px;
            font-size: 15px;
        }
        .inp{
            weight: 300px;
            width: 900px;
        }
        .replacelist{
            display: block;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            position: relative;
        }
        .listform{

        }
    </style>
</head>
<body>
    
<p class="pag"><a class="btn back" href="accountadm.php">Voltar</a><a class="btn back" href="cadanimal.php">Adicionar</a></p>

    <br>
    <div class="replacelist">
        <div class="listform">
            <form action="" method="POST" accept-charset='UTF-8'>
                <input class="inp"type="text" name="txt_pesquisa">
                <input class="btn" type="submit" value="Pesquisar">
            </form>
        </div>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
        <tr class="top">
                <th>id</th>
                <th>Animal</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Vacina</th>
                <th>Observações</th>
                <th>Cor</th>
                <th>Raça</th>
                <th>Castração</th>
                <th>Edição</th>
                <th>Exclusão</th>
            </tr>
            <tr>
            </tr>
            </thead>
            <tbody>
                <?php
                    $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

                    $sql = "SELECT * FROM Animais WHERE id='{txt_pesquisa}' or nome LIKE '%{$txt_pesquisa}%' or animal LIKE '{$txt_pesquisa}' or idade LIKE '{$txt_pesquisa}' or sexo LIKE '{$txt_pesquisa}' or vacina LIKE '{$txt_pesquisa}' or obs LIKE '{$txt_pesquisa}' or cor LIKE '{$txt_pesquisa}' or raca LIKE '{$txt_pesquisa}' or castracao LIKE '{$txt_pesquisa}'";
                    $rs = mysqli_query($conexao,$sql) or die("Erro ao gerar a consulta no banco de dados" . mysqli_error($conexao)); 

                    while ($dados = mysqli_fetch_assoc($rs)){

                ?>
                <tr>
                    <td scope="row"><?=$dados["id"] ?></td>
                    <td><?=$dados["animal"] ?></td>
                    <td><?=$dados["nome"] ?></td>
                    <td><?=$dados["idade"] ?></td>
                    <td><?=$dados["sexo"] ?></td>
                    <td><?=$dados["vacina"] ?></td>
                    <td><?=$dados["obs"] ?></td>
                    <td><?=$dados["cor"] ?></td>
                    <td><?=$dados["raca"] ?></td>
                    <td><?=$dados["castracao"] ?></td>
                    <td><a href="editar.php?id=<?=$dados["id"] ?>">Editar</a></td>
                    <td><a href="excluir.php?id=<?=$dados["id"] ?>">Excluir</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
    </table>
    </div>


    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.odometer.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/appointment.form.js"></script>
</body>
</html>