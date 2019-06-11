<?php

session_start();
    if ($_SESSION['logou']==0){
    header('Location: login.php');
    } 
?>

<!DOCTYPE html>
<html>

<head>
    <title>To-do</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="folhaDeEstilo.css" rel="stylesheet">

    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

</head>

<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "conection.php";
?>
    <div class="titulo">
        <h1> TODO LIST </h1>
    </div>

    <div class="container">
        
        <ul id="incomplete-task">

        <?php
        $consulta = mysqli_query($link,"select * from task");
       
        while($vetor = mysqli_fetch_array($consulta)){
            $finish = $vetor['is_finish'];

        ?>
            <li class="" id="list-<?php echo $vetor['id']; ?>" > 
        <div class="check">
            <input type="checkbox"  valwa="<?php echo $vetor['id']; ?>" class="checkTodo"<?php echo $finish == 1 ? 'checked=checked' : ''; ?> ></div>
                <div class="la"><label><?php echo $vetor['description'] ?></label></div>
            </li>
        <?php } ?>


    </div>
    <br>
    <a class="btn" href="todoAdd.php">ADICIONAR</a>
    <a class="btn" href="sair_sessao.php">SAIR</a>
    <br>
<script>

$(document).ready(function(){

    $('.checkTodo').click(function(){
        
        var idstatus = $(this).prop('checked') == true;
        alert(idstatus);

        if (idstatus){
            $("#OK").load('ativa.php?id2='+$(this).attr("valwa"));
        } else {
            $("#OK").load('desativa.php?id2='+$(this).attr("valwa"));
        }
    });
});

</script>
<div id='OK'></div>

</body>
</html>