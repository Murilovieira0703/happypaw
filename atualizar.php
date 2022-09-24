<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Paw | Atualizado</title>
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
        .container{
            text-align : center;
            margin-top: 200px;
        }
        .flex {
            display: flex;
            justify-content: center;
        }
        .btn{
            margin: 0 10px 0 10px;
        }
    </style>
    
</head>
<body>
<header>
<?php 
    include("conexao.php");
    include('global.php'); 
    include('protectadm.php');
    
    $id = mysqli_real_escape_string($conexao,$_POST["id"]);
    $nome = mysqli_real_escape_string($conexao,$_POST["nome"]);
    $animal = mysqli_real_escape_string($conexao,$_POST["animal"]);
    $idade = mysqli_real_escape_string($conexao,$_POST["idade"]);
    $sexo = mysqli_real_escape_string($conexao,$_POST["sexo"]);    
    $vacina = mysqli_real_escape_string($conexao,$_POST["vacina"]);    
    $obs = mysqli_real_escape_string($conexao,$_POST["obs"]);    
    $cor = mysqli_real_escape_string($conexao,$_POST["cor"]);    
    $raca = mysqli_real_escape_string($conexao,$_POST["raca"]);    
    $castracao = mysqli_real_escape_string($conexao,$_POST["castracao"]);    

    $sql =  "UPDATE animais SET
    nome = '{$nome}',
    animal = '{$animal}',
    idade = '{$idade}',
    sexo = '{$sexo}',
    vacina = '{$vacina}',
    obs = '{$obs}',
    cor = '{$cor}',
    raca = '{$raca}',
    castracao = '{$castracao}'
    WHERE id = '{$id}'
    ";
        mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
        
echo
    '<div class="container">
        <h2>Registro atualizado com sucesso!</h2>
        <p>Cadastre mais ou edite seus cadastros!.</p>
        <p class="flex"><a class="btn" href="cadanimal.php">Cadastrar</a><a class="btn" href="list.php">Lista</a><a class="btn" href="accountadm.php">Voltar</a></p>
    </div>';

?>
</header>


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