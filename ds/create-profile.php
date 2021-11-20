<?php
    include_once('php/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.min.css?ts=<?=time()?>" />
    <title>Bem vindo ao Digital Study</title>
</head>

<body>
    <nav class="navbar bg-dark">
        <h1>
            <a href="posts.php"> <img class="brand" src="img/DigitalStudyV1.png" alt=""></a>
        </h1>
        <ul>
            <li><a href="profiles.php">Professores</a></li>
            <li><a href="profiles copy.php">Estudantes</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li>
            </li>
            <li>
                <a href="login.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="hide-sm"> Sair</span></a>
            </li>
        </ul>
    </nav>
    <section class="container">
        <h1 class="large text-primary">
            Biografia & Redes Sociais
        </h1>
        <p class="lead">
            <i class="fas fa-user"></i> Insira algumas informações para o seu perfil
        </p>
        <form class="form" method="post" action="php/bioeredes.php">
            <div class="form-group">
                <textarea placeholder="Uma rápida biografia sua" name="bio"></textarea>
                <small class="form-text">Diga um pouco sobre você</small>
            </div>
            <div class="form-group social-input">
                <i class="fab fa-twitter fa-2x"></i>
                <input type="text" placeholder="twitter.com/" name="twitter" />
            </div>

            <div class="form-group social-input">
                <i class="fab fa-facebook fa-2x"></i>
                <input type="text" placeholder="facebook.com/" name="facebook" />
            </div>

            <div class="form-group social-input">
                <i class="fab fa-youtube fa-2x"></i>
                <input type="text" placeholder="youtube.com/channel/" name="youtube" />
            </div>

            <div class="form-group social-input">
                <i class="fab fa-linkedin fa-2x"></i>
                <input type="text" placeholder="linkedin.com/in/" name="linkedin" />
            </div>

            <div class="form-group social-input">
                <i class="fab fa-instagram fa-2x"></i>
                <input type="text" placeholder="instagram.com/" name="instagram" />
            </div>
            <input type="submit" class="btn btn-primary my-1" />
            <a class="btn btn-light my-1" href="dashboard.php">Go Back</a>
        </form>
    </section>
</body>

</html>