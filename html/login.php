<?php

$servername = "db";
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password, "socialmedia");

$u = $_POST['user'];
$p = $_POST['password'];

$ok = $conn->query("SELECT * FROM users WHERE username = \"$u\" AND password = \"$p\"");

if (!$ok) {
//    echo "nao achou";
};

$user;

foreach ($ok->fetch_all() as $key => $value) {
    $user = $value;
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SocialMedia Login</title>
</head>
<body>
<div class="container" style="margin-top: 15vh">
    <div class="row justify-content-md-center align-items-center">
        <div class="col-sm-12 col-md-6">
            <div class="jumbotron">
                <h1 class="display-4">login</h1>
                <hr class="my-4">
                <form method="post" action="login.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuário</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuário" name="user">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a class="btn btn-secondary" href="signup.html" role="button">Cadastro</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

