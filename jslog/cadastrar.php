<?php
    include("conexao.php");
    if(isset($_POST['emailcadastro']) || isset($_POST['senhacadastro'])){

        if(strlen($_POST['emailcadastro']) == 0) {
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['senhacadastro']) == 0) {
            echo "Preencha sua senha";
        } else {
            
            $emailCadastro = $conexao->real_escape_string($_POST["emailcadastro"]);
            $senhaCadastro = $conexao->real_escape_string($_POST["senhacadastro"]);
    
            $sql_code = "SELECT * FROM `usuarios` WHERE emailcadastro = '$emailCadastro' AND senhacadastro = '$senhaCadastro'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
    
            $quantidade = $sql_query->num_rows;
    
            if($quantidade == 1) {
                
                $usuario = $sql_query->fetch_assoc();
    
                if(!isset($_SESSION)) {
                    session_start();
                }
    
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nomecadastro'] = $usuario['nomecadastro'];
    
                header("Location: account.php"); 
    
            } else {
                echo "<center>Falha ao logar! E-mail ou senha incorretos<center>";
            }
    
        }
    
    }
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Paw | Login-Cadastro</title>
    <link rel="stylesheet" href="csslog/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- CSS only -->
    <integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        body{
            background-color: #cad4d5;
        }
        .container{
            height: 100%;
            flex-direction: column;
            background-color: #cad4d5;
        }
        .back{
            margin-bottom: 65px;
        }
        .content{
            height: 75%;
            background-color: white;
        }
        #agreement, #agreement-label {
            width: auto ;
            height: 25px;
            display: inline-block;
        }
        #agreement {
            margin-right: 10px;

        }
        .agreement{
            display: flex;
            margin-left: 12px;
        }
    </style>

</head>
<body>
    <br>
    <div class="container">
    <a href="index.php" class="btn btn-second back">Voltar</a>
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, amigo!</h2>
                <p class="description description-primary">Insira seus dados pessoais para continuar</p>
                <p class="description description-primary">e iniciar uma jornada com nós</p>
                <button id="signin" class="btn btn-primary">Login</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Crie sua conta!</h2>
                <form action="cadastrado2.php" id="myForm" method="POST" class="form">
                    <label class="label-input" for="nomecadastro">
                        <i class="far fa-user icon-modify"></i>
                        <input name="nomecadastro" id="nomecadastro" type="text" value="" required placeholder="Nome">
                    </label>

                    <label class="label-input" for="sobrenomecadastro">
                        <i class="far fa-user icon-modify"></i>
                        <input name="sobrenomecadastro" id="sobrenomecadastro" type="text" value="" placeholder="Sobrenome" required>
                    </label>
                    
                    <label class="label-input" for="emailcadastro">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="emailcadastro" id="emailcadastro" type="email" value="" required placeholder="E-mail">
                    </label>
                    
                    <label class="label-input" for="senhacadastro">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senhacadastro" id="senhacadastro" value="" required type="password" placeholder="A senha deve ter entre 8 e 16 caracteres...">
                    </label>

                    <label class="label-input" for="password">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha">
                    </label>
                    <div class="agreement">
                        <input type="checkbox" name="agreement" id="agreement"  required>
                        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="termos.html">termos de uso</a></label>
                    </div>
                    <button value="[ Enviar Mensagem ]" id="btn" type="Submit" class="btn btn-second">Sign-in</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-vindo de volta!</h2>
                <p class="description description-primary">Para continuar conectado com a gente</p>
                <p class="description description-primary">Faça o login com seus dados.</p>
                <button id="signup" class="btn btn-primary">Sign-in</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Faça seu login</h2>
                <form class="form" action="failogin.php" method="post">
                
                    <label class="label-input" for="emailcadastro">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="emailcadastro" required type="email" placeholder="E-mail">
                    </label>
                
                    <label class="label-input" for="emailcadastro">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senhacadastro" required type="password" placeholder="Senha">
                    </label>
                
                    <a class="password" href="esqueciminhasenha.php">Esqueceu sua senha?</a>
                    <a class="password" href="cadadmin.php">Login como administrador?</a>
                    <button type="submit" class="btn btn-second">Logar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="jslog/app.js"></script>
    <script src="https://kit.fontawesome.com/c358fe95a4.js" crossorigin="anonymous" defer></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/validator.js"></script>
</body>
</html>
