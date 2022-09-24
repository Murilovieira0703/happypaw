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
    <script>
    // pegando dados do formulario
function postRefreshPage () {
    var theForm, newInput1, newInput2;
    // Start by creating a <form>
    theForm = document.createElement('form');
    theForm.action = 'somepage.php';
    theForm.method = 'post';
    // Next create the <input>s in the form and give them names and values
    newInput1 = document.createElement('input');
    newInput1.type = 'hidden';
    newInput1.name = 'input_1';
    newInput1.value = 'value 1';
    newInput2 = document.createElement('input');
    newInput2.type = 'hidden';
    newInput2.name = 'input_2';
    newInput2.value = 'value 2';
    // Now put everything together...
    theForm.appendChild(newInput1);
    theForm.appendChild(newInput2);
    // ...and it to the DOM...
    document.getElementById('hidden_form_container').appendChild(theForm);
    // ...and submit it
    theForm.submit();
  }
  function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
  </script>
</head>
<body>
<header>

<?php 
function get_var($var)
{
    $id = $_POST["id"]; // id from google
    $id_token = file("https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=" . $id); // decrypted id
    foreach ($id_token as $part) {
        // part is a factor of the user such as name or email
        // remove unecessary charcters
        $peice = str_replace("\"", "", $part);
        $peice = str_replace(",", "", $peice);
        $peice = substr($peice, 0, strpos($peice, ":") + 2);
        if (strpos($peice, $var) !== false) {
            $var = str_replace("\"", "", $part);
            $var = str_replace(",", "", $var);
            $var = substr($var, strpos($var, ":") + 2);
            return $var;
        }
    }
}
include("conexao.php");

$name = trim(get_var("given_name"));
$osbrename = trim(get_var("family_name"));
$email = trim(get_var("email"));
$senhaid = trim(get_var("id"));

$sql =  "INSERT INTO usuarios (
    nomecadastro,
    sobrenomecadastro,
    emailcadastro,
    senhacadastro) 
    VALUES(
        '{$name}',
        '{$sobrename}',
        '{$email}',
        '{$senhaid}'
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