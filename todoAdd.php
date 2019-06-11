<!DOCTYPE html>
<html>

<head>
    <title>To do list write</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="folhaDeEstilo.css" rel="stylesheet">
</head>

<body>
    <div class="titulo">
        <h1>To Do List</h1>
    </div>
    <div class="fomulario">

        <form action="in.php" method="POST">
            <div class="text">
                <textarea name="description" rows="10" cols="30" placeholder="Descrição"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
        </form>
    </div>
</body>

</html>