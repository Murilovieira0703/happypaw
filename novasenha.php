<?php 
    include("conexao.php");
    if(isset($_POST['resgate'])){

        } else {

            $emailCadastro = $conexao->real_escape_string($_POST["resgate"]);

            
            $sql_code = "SELECT * FROM `usuarios` WHERE emailcadastro = '$emailCadastro'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
    
            $quantidade = $sql_query->num_rows;
    
            if($quantidade == 1) {
                
                $usuario = $sql_query->fetch_assoc();
    
                if($usuario) {
                    $chave = sha1($usuario["id"].$usuario["senhacadastro"]);
                    return $chave;
                }
    
            }
        }
    
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Paw | Link senha</title>
    <link rel="stylesheet" href="csslog/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
<head>
<body>
   <?php
   include ('novasenha.php'); 
   if($chave){
       echo '<a href=".enviarform.php?='.$chave.'">enviar email de recuperação</a>';
   } else {
    echo '<h1>Eerro usuário não encontrado</h1>';
}

    ?>
</body>

</html>
