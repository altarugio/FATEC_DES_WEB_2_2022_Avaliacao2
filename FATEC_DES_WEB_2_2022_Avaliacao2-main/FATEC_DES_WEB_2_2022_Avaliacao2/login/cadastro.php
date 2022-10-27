
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>CADASTRAR</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; 
        background:grey;
        align:center;
        text-align: center;
        }
        .menu{
        display:flex;
        background-color: black;
        padding-top: 50px;
        padding-right: 50px;
        padding-bottom: 100px;
        padding-left: 600px;
        }

        h3{
            color:white;
        }
    </style>
    </style>
</head>


<?php

session_start();
if((!isset ($_SESSION['loggedin']) == true) and (!isset ($_SESSION['loggedin']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['loggedin'];
?>



<body>
    <div class="menu">
    <div class="wrapper">
        <h2>Cadastro de passagem de veiculos no pedagio</h2>
        <h3>Favor inserir modelo do veiculo, cor, placa e horário.</h3>
        <form action="arquivos.php" method="post">
            <div class="form-group">
				
                <label>Modelo</label>
                <input type="text" name="modelo" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Cor</label>
                <input type="text" name="cor" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Placa</label>
                <input type="text" name="placa" class="form-control" value="">
                <span class="help-block"></span>
            </div>  
            <div class="form-group">
                <label>Horário da Cobrança</label>
                <input type="text" name="horario" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar"> 
                <a href="oscadastrados.php" class="btn btn-primary">Abrir Historico</a>
            </div>
            <div>
            <a href="welcome.php" class="btn btn-danger">Voltar</a>
            <div>
</div>
        </form>
    </div>    
</body>
</html>