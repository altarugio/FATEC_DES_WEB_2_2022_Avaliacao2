<!DOCTYPE html>
<html>
<body>
<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
$logado = $_SESSION['loggedin'];
?>
<?php
$myfile = fopen("cadastrado.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("cadastrado.txt"));
fclose($myfile);
?>

</body>
</html>