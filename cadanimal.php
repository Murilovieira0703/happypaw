<?php
include('global.php'); 

//nome inicial para inserção da tabela
$nomearq = md5(time());
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Paw | Cadastro Animais</title>
    <link rel="stylesheet" href="csslog/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        body{
            background-color: #cad4d5;
        }
        .second-column{
            background-color: #fff;
            margin : 0 auto 0 auto;
            border-radius: 20px;
            width: 65%;
            height: 100%;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .cont{
            width: 800px;
            height: 750px;
            justify-items: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .back{
            margin-bottom: 20px;
        }
        .radio{
            height: 12px !important;
            width: 50px !important;
        }
        .form{
            width: 90%;
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
        .btn{
            margin-top: 0 !important;
        }
    </style>
    
</head>
<body>
<div class="row">
<div class="cont">
<a href="accountadm.php" class="btn btn-second back">Voltar</a>
<div class="second-column">
                <h2 class="title title-second">Cadastre um novo animal!</h2>
                <form class="form" action="animalcadastrado.php" method="post" accept-charset='UTF-8'>
                
                    <label class="label-input" for="animal">
                        <i class="fas fa-paw icon-modify"></i>
                        <input name="animal" required type="text" placeholder="Animal" maxlength="30" minlength="3">
                    </label>
                
                    <label class="label-input" for="nome">
                        <i class="fas fa-dog icon-modify"></i>
                        <input name="nome" required type="text" placeholder="Nome" maxlength="30" minlength="2">
                    </label>

                    <label class="label-input" for="idade">
                        <i class="far fa-calendar icon-modify"></i>
                        <input name="idade" required type="number" placeholder="Idade" maxlength="2" minlength="1">
                    </label>
                    
                    <label class="label-input" for="sexo">
                        <i class="fas fa-genderless icon-modify"></i>
                        <input class="radio" name="sexo" value="masc" required type="radio">
                        <label class="sexlabel" for="sexo">Masculino</label>
                        <input class="radio" name="sexo" value="fem" required type="radio">
                        <label class="sexlabel" for="sexo">Feminino</label>
                    </label>

                    <label class="label-input" for="vacina">
                        <i class="fas fa-syringe icon-modify"></i>
                        <input name="vacina" required type="text" placeholder="Vacinação" maxlength="200">
                    </label>
                    
                    <label class="label-input" for="obs">
                        <i class="fas fa-book-open icon-modify"></i>
                        <input name="obs" required type="text" placeholder="Observações do animal" maxlength="400">
                    </label>

                    <label class="label-input" for="cor">
                        <i class="fas fa-palette icon-modify"></i>
                        <input name="cor" required type="text" placeholder="Cor"  maxlength="30">
                    </label>

                    <label class="label-input" for="raca">
                        <i class="fas fa-horse icon-modify"></i>
                        <input name="raca" required type="text" placeholder="Raça" maxlength="50">
                    </label>

                    <label class="label-input" for="castracao">
                        <i class="fas fa-cat icon-modify"></i>
                        <input name="castracao" required type="text" placeholder="Castração do animal" maxlength="100">
                    </label>
                    <button type="submit" class="btn btn-second">registrar</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
        <div class ="foto">
            <?php
                    $nomeFoto = "user.jpg";
            ?>
    <div class="mb-3">
        <img id="foto-contato" class="img-fluid img-thumbnail" src="./img/uploads/<?=$nomeFoto?>" alt="Foto do Animal" width="350" height="350"/>
    </div>
    <div id="editar-foto">
                <form required id="form-upload-foto" class="mb-3" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idContato" value="<?=$nomearq?>">
                <label class="form-label" for="arquivo">Selecione um arquivo de imagem para foto do animal</label>
                    <div class="input-group">
                        <input class="form-control" type="file" name="arquivo" id="arquivo">
                        <input id="btn-enviar-foto" class="btn btn-secondary" type="submit" value="Enviar">
                    </div>

                </form>
</div>
</div>
<br>
    <script src="js/upload.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.js"></script>
    <script src="jslog/app.js"></script>
    <script src="js/checkform.js"></script>
    <script src="https://kit.fontawesome.com/c358fe95a4.js" crossorigin="anonymous" defer></script>
</body>
</html>
