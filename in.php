<?php
    include "conection.php";

    $id = "";
    $descricao = $_POST['description'];
    $is_finish = "";

    $exec = mysqli_query($link,"insert into task( description, is_finish) values ('$descricao',0)");

    header('location:to-do-list.php');
   
    /*
     mysqli_query($link,"insert into task(id, description, is_finish) values ('$id','$descricao','$is_finish')");
  */ 


?>