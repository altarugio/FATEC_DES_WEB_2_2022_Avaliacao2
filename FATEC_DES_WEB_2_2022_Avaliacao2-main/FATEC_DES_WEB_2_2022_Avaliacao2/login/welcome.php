<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
$logado = $_SESSION['loggedin'];
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Avaliação 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; 
            text-align: center; 
            background:grey;
        }


    </style>
</head>
<body>
    <div class="page-header">
        <h1>
        <br>
        </b>Seja Bem Vindo!! <br><br> Se cadastre, para ser um dos primeiros a receber as novidades dos Lançamentos Imobiliarios em Rio Claro.</h1> <br>
      
    </div>
    <div class="menu">
    <p><br>
        <a href="parametros_post_01.php" class="btn btn-primary">Quero receber as novidades em primeiro mão</a>
        <br><br>
        <a href="oscadastrado.php" class="btn btn-primary">Consultar cadastros</a>
        <br><br>
        
        <div>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </div>
    </div>
    </p>
</body>
</html>