<?php
include_once('php/conexao.php');

$postDados = $conn->query('SELECT * FROM tbpub ORDER BY idPub DESC');
$postDados = $postDados->fetch_all();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.min.css?ts=<?= time() ?>" />
    <title>Digital Study</title>
</head>

<body>
    <nav class="navbar bg-dark">
        <h1>
            <a href="posts.php"> <img class="brand" src="img/DigitalStudyV1.png" alt=""></a>
        </h1>
        <ul>
            <li><a href="profiles.php">Professores</a></li>
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
            Bem-vindo ao seu feed
        </h1>

        <div class="post-form">
            <div class="post-form-header bg-primary">
                <h3>Crie uma discussão...</h3>
            </div>
            <form class="form my-1" method="POST" action="php/publicacao.php" enctype="multipart/form-data">
                <input type="file" name="imagem" id="imagem" accept="image/*">
                <label for="imagem">
                    <span class="material-icons">add_photo_alternate</span>
                </label>
                <input type="file" name="video" id="video" accept="video/*">
                <label for="video">
                    <span class="material-icons">video_call</span>
                </label>
                <textarea cols="30" id="pub" name="pub" rows="5" placeholder="Crie uma discussão"></textarea>
                <button type="submit" class="btn btn-dark my-1" value="Cadastrar">Enviar</button>
            </form>
            <div class="posts">

                <?php
                $i = 0;
                while ($i < count($postDados)) {
                    $publicacao = $postDados[$i][1];
                    $imagem = $postDados[$i][2];
                    $video = $postDados[$i][3]
                ?>

                <div class="post bg-white my-1 p-1">
                    <div>
                        <a href="profile.php">
                            <img class="round-img" src="img/marselo.jpg" />
                            <h4>
                                Marcelo Alcantara
                            </h4>
                        </a>
                    </div>

                    <div>
                        <p class="my-1">
                            <?php
                                if($imagem==null && $video==null){?>
                            <?= $publicacao ?><br /><br />
                            <?php }
                               else if($imagem){?>
                            <?= $publicacao ?><br /><br />
                                <img src="upload/<?= $imagem ?>" style="width: 400px; border-radius: 10px">
                            <?php }
                                else{?>
                            <?= $publicacao ?><br /><br />
                            <video src="upload/<?= $video ?>" style="width: 600px; border-radius: 10px" preload="auto"
                                controls>
                                <?php }?>

                        </p>
                        <button class="btn">
                            <i class="fas fa-thumbs-up"></i><span> 4</span>
                        </button>
                        <button class="btn">
                            <i class="fas fa-thumbs-down"></i>
                        </button>
                        <a href="post.php" class="btn btn-primary">
                            Discussão
                        </a>
                    </div>

                </div>

                <?php $i++;
                } ?>
            </div>
    </section>
</body>

</HTML>