<?php 
include "conection.php";
$nome = $_POST['user-name'];
$senha = $_POST['pass-user'];

error_reporting(E_ALL);
ini_set('display_errors', 1);

$q = "SELECT * FROM `login` WHERE `login` ='".$nome."' AND `senha` ='".$senha."'";
$entra = mysqli_query($link,$q );
$vetores = mysqli_fetch_array($entra);

var_dump($entra);
var_dump($vet['login']);
var_dump($vet['senha']);

if(($nome == $vetores['login']) and ($senha == $vetores['senha'])){
    session_start();
    $_SESSION['logou'] = 1;
    header("Location: to-do-list.php");
} else{
    session_start();
    $_SESSION['logou'] = 0;
    echo 'erro';
}

?>