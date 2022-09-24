<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Paw | Login-Cadastro</title>
    <link rel="stylesheet" href="csslog/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <style>
        body{
            background-color: #ecf0f1;
        }
        .contbtn{
            margin-top: 50px !important;
            justify-content: center;
            display: flex;
            padding-bottom: 50px;
        }
        .background{
            border-radius: ;
            background-color: #ffff;
            width: 40% !important;
            height: 50% !important;
            justify-content: center !important;
            border-radius: 2% !important;
            margin : 0 auto 0 auto;
        }
        .container{
            text-align: center;
            background-color: #ffff;
        }
        .form{
            margin: 0 auto 0 auto;
        }
        .label-input{
            widht: 100%;
        }
        .conteudo{
            width: 100%;
        }
    </style>
</head>
<body>
<div class="background">
<div class="contbtn">
    <a href="cadastrar.php" class="btn btn-second back">Voltar</a>
    </div>
    <div class="container">

        <div class="conteudo">
                <h2 class="title ">Insira o e-mail</h2>
                <p class="description description-second">e você receberá um e-mail de refinção de senha</p>
                <BR>
                <form class="form" action="novasenha.php" method="post">
                
                    <label class="label-input" for="emailcadastro">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="resgate" required type="email" placeholder="E-mail">
    </label>
    <br>
                    <button type="submit" class="btn btn-second">Enviar</button>
                </form>
            </div><!-- second column -->
    </div>
</div>
    <script src="jslog/app.js"></script>
    <script src="js/checkform.js"></script>
    <script src="https://kit.fontawesome.com/c358fe95a4.js" crossorigin="anonymous" defer></script>
</body>
</html>