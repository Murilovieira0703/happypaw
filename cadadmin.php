<?php
include("conexao.php");
include("global.php"); 

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO) or die("Erro na conexão com o servidor" .mysqli_connect_error());

if(isset($_POST['emailadmin']) || isset($_POST['senhaadmin'])){

    if(strlen($_POST['emailadmin']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senhaadmin']) == 0) {
        echo "Preencha sua senha";
    } else {
        
        $emailCadastro = $conexao->real_escape_string($_POST["emailadmin"]);
        $senhaCadastro = $conexao->real_escape_string($_POST["senhaadmin"]);

        $sql_code = "SELECT * FROM `Admin` WHERE emailadmin = '$emailCadastro' AND senhaadmin = '$senhaCadastro'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['ONGID'] = $usuario['ONGID'];
            $_SESSION['nomeadmin'] = $usuario['nomeadmin'];

            header("Location: accountadm.php"); 

        } else {
            echo "<center>Falha ao logar! E-mail ou senha incorretos<center>";
        }

    }

}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Paw | Admin</title>
    <link rel="stylesheet" href="csslog/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <style>
        body{
            background-color: #cad4d5;
        }
        .second-column{
            background-color: #fff;
            margin : 0 auto 0 auto;
            border-radius: 20px;
            width: 40%;
            height: 48%;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .cont{
            width: 100%;
            height: 100%;
            justify-items: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .back{
            margin-bottom: 20px;
        }
    </style>
    
</head>
<body>
<div class="cont">
<a href="cadastrar.php" class="btn btn-second back">Voltar</a>
<div class="second-column">
                <h2 class="title title-second">Faça seu login Admin</h2>
                <form class="form" action="" method="post">
                
                    <label class="label-input" for="emailadmin">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="emailadmin" required type="email" placeholder="E-mail">
                    </label>
                
                    <label class="label-input" for="senhaadmin">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senhaadmin" required type="password" placeholder="Senha">
                    </label>
                    <button type="submit" class="btn btn-second">Logar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
</div>


    <script src="jslog/app.js"></script>
    <script src="https://kit.fontawesome.com/c358fe95a4.js" crossorigin="anonymous" defer></script>
</body>
</html>
