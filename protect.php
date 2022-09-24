<?php
include('global.php'); 

if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="keywords" content="adoção, adotar, cachorro, gato, animais,  ong, adotar animais">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Happy Paw | Acesso Negado</title>
        <meta name="description" content="Happy Paw! Adote já o seu amiguinho e seja feliz!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php
if(!isset($_SESSION['id'])) {
    die('<div class="container"><h1>Você não pode acessar esta página porque não está logado.</h1><p><a class="btn" href="cadastrar.php">Voltar</a></p></div>');
}
?>
</body>
</html>