<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Paw | Cadastrado</title>
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
    </style>
    
</head>
<body>
<header>
<?php 
    include("conexao.php");

    $nomeCadastro = mysqli_real_escape_string($conexao,$_POST["nomecadastro"]);
    $sobrenomeCadastro = mysqli_real_escape_string($conexao,$_POST["sobrenomecadastro"]);
    $emailCadastro = mysqli_real_escape_string($conexao,$_POST["emailcadastro"]);
    $senhaCadastro = mysqli_real_escape_string($conexao,$_POST["senhacadastro"]);    

    $senhaCadastro = filter_input(INPUT_POST, 'senhacadastro', FILTER_DEFAULT);

    $senhaSegura = password_hash($senhaCadastro,PASSWORD_DEFAULT);

    $sql =  "INSERT INTO usuarios (
        nomecadastro,
        sobrenomecadastro,
        emailcadastro,
        senhacadastro) 
        VALUES(
            '{$nomeCadastro}',
            '{$sobrenomeCadastro}',
            '{$emailCadastro}',
            '{$senhaCadastro}'
        )
        ";
        mysqli_query($conexao,$sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));
        
echo
    '<div class="container">
        <h2>Cadastro feito com sucesso!</h2>
        <p>Agora volte e faça seu login.</p>
        <p><a class="btn" href="cadastrar.php">Voltar</a></p>
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