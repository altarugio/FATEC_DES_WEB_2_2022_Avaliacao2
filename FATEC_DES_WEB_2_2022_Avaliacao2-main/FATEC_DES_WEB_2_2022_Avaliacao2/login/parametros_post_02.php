

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php

$nome = $_POST['firstName'];
$sobrenome = $_POST['lastName'];
$telefone = $_POST['telefone'];

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['firstName']) and validar_post($_POST['lastName']) and validar_post($_POST['telefone'])){
    echo '<br><br>';
    echo ''.$_POST['firstName'] ;
    echo ' ';
    echo ''.$_POST['lastName'];
    echo '<br><br>';
 


 

require_once('dados_banco.php');

// Criar Conexão
$conn = mysqli_connect($servername, $username, $password, $dbname, 4000);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO authors (firstname, lastname, telefone)
VALUES ('$nome', '$sobrenome', $telefone)";

if (mysqli_query($conn, $sql)) {
    echo "<br> Cadastro realizado com sucesso. ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$filename = "cadastrado.txt";
if(!file_exists("cadastrado.txt")){
    $handle = fopen("cadastrado.txt", "w");
} else {
    $handle = fopen("cadastrado.txt", "a");
}

fwrite($handle, ($_POST['firstname'])."\n");
fwrite($handle, ($_POST['lastname'])."\n");
fwrite($handle, ($_POST['telefone'])."\n");

fwrite($handle, ($_POST[''])."\n");
fflush($handle);
fclose($handle);

$handle = fopen("cadastrado.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
header("location: cadastro.php")

}


?>



</body>
</html>