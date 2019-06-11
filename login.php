
<!DOCTYPE html>
<html>
    <head>
        <title>Login To-Do</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="estilo_login.css" rel="stylesheet">
    
    </head>
    <body>
        <h1>Bem vindo ao To-Do-List</h1>
        <br>
        <div id="container">
            <form method="post" action="entra.php">
                <h2>Login</h2>
                <br>
                <p>
                <label for="user-name">Login: </label><br>
                <input type="text" id="user-name" name="user-name">
                </p> 
                <p>
                <label for="password">Senha: </label><br>
                <input type="password" id="pass-user" name="pass-user">
                </p>
                <br>
                <div id="btn">
                <input type="submit" value="Logar">
                </div>
            </form>
        </div>
    </body>
</html>