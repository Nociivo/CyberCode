<?php
    include_once('php/conexao.php');

    $dados = $conn -> query('SELECT * FROM tbaluno');
    $dados = $dados -> fetch_all();

    $redes = $conn -> query('SELECT * FROM tbbioredes');
    $redes = $redes -> fetch_all();

    $exp = $conn->query('SELECT * FROM tbexperiencia');
    $exp = $exp->fetch_all();
    
    $forma = $conn->query('SELECT * FROM tbformacao');
    $forma = $forma->fetch_all();
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
            <li><a href="posts.php">Posts</a></li>
            <li>
                <a href="login.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="hide-sm"> Sair</span></a>
            </li>
        </ul>
    </nav>
    <section class="container">
        <a href="profiles.php" class="btn">Voltar</a>

        <div class="profile-grid my-1">
            <!-- Top -->
            <div class="profile-top bg-primary p-2">

                <img class="round-img my-1" src="img/marselo.jpg" alt="" />
                <h1 class="large"><?=$dados[$_SESSION=0][1]?></h1>
                <p class="lead"><?=$exp[$i=0][1]?></p>
                <p>São Paulo, SP</p>
                <div class="icons my-1">
                <?php
                    $i = 0;
                    if ($i < count($redes)) {
                        $bio = $redes[$i][1];
                        $twitter = $redes[$i][2];
                        $facebook = $redes[$i][3];
                        $youtube = $redes[$i][4];
                        //$inicio1 = DateTime::createFromFormat("F j, Y", $inicio);//
                        $linkedin = $redes[$i][5];
                        $instagram = $redes[$i][6];
                ?>
                    <a href="https://twitter.com/<?=$twitter?>" target="_blank">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="https://facebook.com/<?=$facebook?>" target="_blank">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://youtube.com/channel/<?=$youtube?>" target="_blank">
                        <i class="fab fa-youtube fa-2x"></i>
                    </a>
                    <a href="https://linkedin.com/in/<?=$linkedin?>" target="_blank">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="https://instagram.com/<?=$instagram?>" target="_blank">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                </div>
            </div>
            <!-- About -->
            <div class="profile-about bg-light p-2">
                <h2 class="text-primary">Bio de <?=$dados[$_SESSION=0][1]?></h2>
                <p><?=$bio?></p>
            </div>
                <?php }?>
            <!-- Experience -->
            <div class="profile-exp bg-white p-2">
                <h2 class="text-primary">Experiencia</h2>
                <?php
                    $i = 0;
                    while ($i < count($exp)) {
                        $materia = $exp[$i][1];
                        $escola = $exp[$i][2];
                        $inicio = $exp[$i][3];
                        //$inicio1 = DateTime::createFromFormat("F j, Y", $inicio);//
                        $fim = $exp[$i][4];
                        $atual = $exp[$i][5];
                        $desc = $exp [$i][6];
                ?>
                <div>

                    <p><strong>Escola: </strong><?=$escola?></p>
                    <p><strong>Matéria: </strong><?=$materia?></p>
                    <p>
                        <?php
                            if($fim == "0000-00-00"){?>
                        <strong>Duração: </strong>
                        <?=$inicio?> - <?=$atual?>
                        <?php }
                            else{?>
                        <strong>Duração: </strong>
                        <?=$inicio?> - <?=$fim?>
                        <?php }?>
                        <!--date("F j, Y");-->
                    </p>
                    <p>
                        <?php
                            if($desc == $desc){?>
                        <strong>Descrição: </strong><?=$desc?>
                        <?php }
                            else{?>
                        <strong>Sem Descrição</strong>
                        <?php }?>
                    </p>
                </div>
                <?php $i++; } ?>
            </div>
            <!-- Education -->
            <div class="profile-edu bg-white p-2">
                <h2 class="text-primary">Grau Acadêmico</h2>
                <?php
                $i = 0;
                while ($i < count($forma)) {
                    $formacao = $forma[$i][1];
                    $escola = $forma[$i][2];
                    $materia = $forma[$i][3];
                    $inicio = $forma[$i][4];
                    $fim = $forma[$i][5];
                    $atual = $forma[$i][6];
                    $desc = $forma [$i][7];
                ?>
                <div>
                    <p><strong>Escola: </strong> <?=$escola?></p>
                    <p><strong>Área de estudo: </strong><?=$materia?></p>
                    <p><strong>Grau Acadêmico: </strong><?=$formacao?></p>
                    <p>
                        <?php
                            if($fim == "0000-00-00"){?>
                            <strong>Duração: </strong>
                            <?=$inicio?> - <?=$atual?>
                        <?php }
                            else{?>
                            <strong>Duração: </strong>
                            <?=$inicio?> - <?=$fim?>
                        <?php }?>
                        <!--date("F j, Y");-->
                    </p>
                    <p>
                        <?php
                            if($desc == $desc){?>
                        <strong>Descrição: </strong><?=$desc?>
                        <?php }
                            else{?>
                        <strong>Sem Descrição</strong>
                        <?php }?>
                    </p>
                </div>
            <?php $i++; }?>
            </div>
            <div>
    </section>
</body>

</html>