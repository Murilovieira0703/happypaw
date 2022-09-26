<?php
include('global.php'); 
include('protectadm.php');
include('conexao.php');

$id = $_GET["id"];

$sql = "SELECT * FROM animais WHERE id= '{$id}'";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro. " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Paw | Editar</title>
    <link rel="stylesheet" href="csslog/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        body{
            background-color: #cad4d5;
        }
        .second-column{
            background-color: #fff;
            border-radius: 20px;
            width: 65%;
            height: 100%;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .cont{
            width: 700px;
            height: 760px;
            justify-items: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        .back{
            margin-bottom: 20px;
        }
        .radio{
            height: 12px !important;
            width: 50px !important;
        }
        .sexlabel{
            margin-bottom: 0 !important;
        }
        .row{
            display : flex;
            align-items: center;
        }
        .foto{
            display: inline;
            align-items: center;
        }
        .btn2{
            background-color: #40bd93;
            text-decoration: none !important;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            border: none;
            padding: 5px;
            margin: 5px;
        }
        .btn2:hover{
            background-color: #34495e;
            transition: background-color .5s;
            color: black;
            transition: color .5s;
        }
        .form-control{
            border-radius: 5px;
            height: 44px;
        }
    </style>
    
</head>
<body>
<div class="row">
<div class="cont">
<a href="list.php" class="btn btn-second back">Voltar</a>
<div class="second-column">
                <h2 class="title title-second">Edite as informações</h2>
                <form class="form" action="atualizar.php" method="post" accept-charset='UTF-8'>
                
                <label class="label-input" for="id">
                        <i class="fas fa-person icon-modify"></i>
                        <input name="id" required type="number" placeholder="ID"value="<?=$dados["id"]?>">
                    </label>

                    <label class="label-input" for="animal">
                        <i class="fas fa-paw icon-modify"></i>
                        <input name="animal" required type="text" value="<?=$dados["animal"]?>" maxlength="30" minlength="3">
                    </label>
                
                    <label class="label-input" for="nome">
                        <i class="fas fa-dog icon-modify"></i>
                        <input name="nome" required type="text" value="<?=$dados["nome"]?>" maxlength="30" minlength="2">
                    </label>

                    <label class="label-input" for="idade">
                        <i class="far fa-calendar icon-modify"></i>
                        <input name="idade" required type="number" value="<?=$dados["idade"]?>" maxlength="2" minlength="1">
                    </label>
                    
                    <label class="label-input" for="sexo">
                        <i class="fas fa-genderless icon-modify"></i>
                        <input class="radio" name="sexo" value="masc" required type="radio">
                        <label class="sexlabel" for="sexo">Masculino</label>
                        <input class="radio" name="sexo" value="fem" required type="radio">
                        <label class="sexlabel" for="sexo">Feminino</label>
                    </label>

                    <label class="label-input" for="porte">
                        <i class="fas fa-size icon-modify"></i>
                        <input name="porte" required type="text" value="<?=$dados["porte"]?>" maxlength="50">
                    </label>

                    <label class="label-input" for="vacina">
                        <i class="fas fa-syringe icon-modify"></i>
                        <input name="vacina" required type="text" value="<?=$dados["vacina"]?>" maxlength="200">
                    </label>
                    
                    <label class="label-input" for="obs">
                        <i class="fas fa-book-open icon-modify"></i>
                        <input name="obs" required type="text" value="<?=$dados["obs"]?>" maxlength="400">
                    </label>

                    <label class="label-input" for="cor">
                        <i class="fas fa-palette icon-modify"></i>
                        <input name="cor" required type="text" value="<?=$dados["cor"]?>" maxlength="30">
                    </label>

                    <label class="label-input" for="raca">
                        <i class="fas fa-horse icon-modify"></i>
                        <input name="raca" required type="text" value="<?=$dados["raca"]?>" maxlength="50">
                    </label>

                    <label class="label-input" for="castracao">
                        <i class="fas fa-cat icon-modify"></i>
                        <input name="castracao" required type="text" value="<?=$dados["castracao"]?>" maxlength="100">
                    </label>
                    <button type="submit" class="btn btn-second">Atualizar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
        <div class ="foto">
            <?php
                $nomefoto = $dados["foto"];
                if($dados["foto"]=="" || !file_exists('./img/uploads/'. $dados["foto"])){
                    $nomefoto = "user.jpg";
                }else{
                    $nomefoto = $dados["foto"];
                }
            ?>
    <div class="mb-3">
        <img id="foto-contato" class="img-fluid img-thumbnail" src="./img/uploads/<?=$nomefoto?>" alt="Foto do Animal" width="350" height="350"/>
    </div>

    <div class="mb-3">
        <button id="btn-editar-foto" class="btn2"><i class="fas fa-camera icon-modify"></i>Editar foto</button>
    </div>
    <div id="editar-foto">
            <form id="form-upload-foto" action="" method="post" enctype="mutipart/form-data">
                <input type="hidden" name="idcontato" value="<?=$id?>">
                <label for="arquivo">Selecione um aquivo de imagem</label>
                <div class="input-group">
                    <input class="form-control" type="file" name="arquivo" id="arquivo">
                    <input id="btn-enviar-foto" class="btn2"type="submit" value="Enviar">
                </div>
            </form>
        <div id="loader" class="progress">
            <div id="barra" class="progress-bar bg-danger"
            role="progressbar"
            style="width: 0%"
            aria-valuenow="0"
            aria-valuemin="0"
            aria-valuemax="100">
            </div>
        </div>
    </div>
    
</div>
</div>
</div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/upload.js"></script>
    <script src="jslog/app.js"></script>
    <script src="js/checkform.js"></script>
    <script src="https://kit.fontawesome.com/c358fe95a4.js" crossorigin="anonymous" defer></script>
</body>
</html>
