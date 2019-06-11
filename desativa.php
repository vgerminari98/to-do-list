<?php 
include "conection.php";
$id = $_GET['id2'];

error_reporting(E_ALL);
ini_set('display_errors', 1);
include "conection.php";

$desatualiza = mysqli_query($link,"UPDATE `task` SET `is_finish` = 0 WHERE `task`.`id` = ".$id);

echo 'Checkbox Desmarcada';
?>