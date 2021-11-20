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
    <title>Digital Study</title>
</head>

<body>
    <nav class="navbar bg-dark">
        <h1>
            <a href="posts.php"> <img class="brand" src="img/DigitalStudyV1.png" alt=""></a>
        </h1>
        <ul>
            <li><a href="php/profileid.php">Professores</a></li>
            <li><a href="profiles copy.php">Estudantes</a></li>
            <li>
                <a href="dashboard.php">
                    <i class="fas fa-user"></i>
                    <span class="hide-sm"> Perfil</span></a>
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
            Professores
        </h1>
        <p class="lead">
            <i class="fab fa-connectdevelop"></i> Procure e conecte-se com outros Professores
        </p>
        <div class="profiles">
            <div class="profile bg-light">
                <img class="round-img" src="img/teacher1.jpg" alt="" />

                <div>
                    <h2>Abby Sorvente</h2>
                    <p>Graduada em Pedagogia</p>
                    <p>São Paulo, SP</p>
                    <a href="profile.php" class="btn btn-primary">
                        Ver Perfil
                    </a>
                </div>
            </div>

            <div class="profile bg-light">
                <img class="round-img" src="img/teacher2.jpg" alt="" />

                <div>
                    <h2>Paula Tejando</h2>
                    <p>Graduação em Fisica</p>
                    <p>Salvador, BA</p>
                    <a href="profile.php" class="btn btn-primary">
                        Ver Perfil
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>