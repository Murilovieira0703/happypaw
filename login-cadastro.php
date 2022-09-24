<?php
include('conexao.php');

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
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}

?>

<!DOCTYPE html>
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
</head>
<body>
    <br>
<center><a href="index.php" class="btn btn-second back">Voltar</a></center>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá, amigo!</h2>
                <p class="description description-primary">Insira seus dados pessoais para continuar</p>
                <p class="description description-primary">e iniciar uma jornada com nós</p>
                <button id="signin" class="btn btn-primary">Login</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Crie sua conta!</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Ou use seu email para se registrar:</p>
                <?php if(count($erro) > 0) {
                    echo "<div class='erro'>";
                    foreach($erro as $valor)
                    echo "valor <br/>";

                    echo "</div>";
                }
                    ?>
                <form action="" method="POST" class="form">
                    <label class="label-input" for="nomecad">
                        <i class="far fa-user icon-modify"></i>
                        <input name="nomecad" id="nomecad" required type="text" value="" placeholder="Nome">
                    </label>

                    <label class="label-input" for="sobrenomecad">
                        <i class="far fa-user icon-modify"></i>
                        <input name="sobrenomecad" id="sobrenomecad" required type="text" value="" placeholder="Sobreome">
                    </label>
                    
                    <label class="label-input" for="emailcad">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="emailcad" id="emailcad" required type="email" value="" placeholder="E-mail">
                    </label>
                    
                    <label class="label-input" for="senhacad">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senhacad" id="senhacad" required value="" type="password" placeholder="A senha deve ter entre 8 e 16 caracteres...">
                    </label>

                    <label class="label-input" for="rsenha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="rsenha" id="rsenha" required id="field-password"  value="" type="password" placeholder="Repita a Senha">
                    </label>
                    <button type="submit" class="btn btn-second">Sign-in</button>        
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
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Ou entre pelo seu e-mail:</p>
                <form class="form" action="login-cadastro" method="POST">
                
                    <label class="label-input" for="emailcadastro">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="emailcadastro" required type="email" placeholder="E-mail">
                    </label>
                
                    <label class="label-input" for="senhacadastro">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senhacadastro" required type="password" placeholder="Senha">
                    </label>
                
                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button type="submit" class="btn btn-second">Logar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="jslog/app.js"></script>
    <script src="https://kit.fontawesome.com/c358fe95a4.js" crossorigin="anonymous" defer></script>
</body>
</html>