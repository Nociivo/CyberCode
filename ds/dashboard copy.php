<?php
    include_once('php/conexao.php');
    $dados = $conn -> query('SELECT * FROM tbaluno');
    $dados = $dados -> fetch_all();

    $redes = $conn->query('SELECT * FROM tbbioredes');
    $redes = $redes->fetch_all();

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
    <title>Bem-vindo ao DigitalStudy</title>
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
                    <span class="hide-sm"><a href="php/logout.php">Sair</span></a>
            </li>
        </ul>
    </nav>
    <section class="container">
        <h1 class="large text-primary">
            Dashboard
        </h1>

        <p class="lead"><i class="fas fa-user"></i> Bem-vindo <?=$dados[$i=0][1]?></p>
        <div class="dash-buttons">
            <a href="create-profile.php" class="btn">
                <i class="fas fa-user-circle text-primary"></i> Adicionar Bio e Redes
            </a>
            <a href="add-experience.php" class="btn">
                <i class="fab fa-black-tie text-primary"></i> Adicionar Experiência
            </a>
            <a href="add-education.php" class="btn">
                <i class="fas fa-graduation-cap text-primary"></i> Adicionar Formação
            </a>
        </div>

        <h2 class="my-2">
            Redes
        </h2>
        <table class="table">
            <thead>
                <tr>
                    <th style="padding:5px">Twitter</th>
                    <th style="padding:5px">Facebook</th>
                    <th style="padding:5px">Youtube</th>
                    <th style="padding:5px">LinkedIn</th>
                    <th style="padding:5px">Instagram</th>
                    <th style="padding:5px">Editar ou Apagar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                    $twitter = $redes[$i][2];
                    $facebook = $redes[$i][3];
                    $youtube = $redes[$i][4];
                    $linkedin = $redes[$i][5];
                    $instagram = $redes[$i][6];
            ?>
                <tr>
                    <td style="text-align:center">
                        <a href="<?=$twitter?>" target="_blank">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                    </td>
                    <td style="text-align:center">
                        <a href="<?=$facebook?>" target="_blank">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                    </td>
                    <td style="text-align:center">
                        <a href="<?=$youtube?>" target="_blank">
                            <i class="fab fa-youtube fa-2x"></i>
                        </a>
                    </td>
                    <td style="text-align:center">
                        <a href="<?=$linkedin?>" target="_blank">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </td>
                    <td style="text-align:center">
                        <a href="<?=$instagram?>" target="_blank">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-primary">
                            Editar
                        </button>
                        <button class="btn btn-danger">
                            Apagar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <h2 class="my-2">
            Experiência
        </h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Escola</th>
                    <th class="hide-sm">Matéria</th>
                    <th class="hide-sm">Duração</th>
                    <th>Editar ou Apagar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($i < count($exp)) {
                    $materia = $exp[$i][1];
                    $escola = $exp[$i][2];
                    $inicio = $exp[$i][3];
                    $fim = $exp[$i][4];
                    $atual = $exp[$i][5]
            ?>
                <tr>
                    <td><?=$escola?></td>
                    <td class="hide-sm"><?=$materia?></td>
                    <td class="hide-sm">
                        <?php
                            if($fim == "0000-00-00"){?>
                        <?=$inicio?> - <?=$atual?>
                        <?php }
                               else{?>
                        <?=$inicio?>/<?=$fim?>
                        <?php }?>
                        <!--date("F j, Y");-->
                    </td>
                    <td>
                        <button class="btn btn-primary">
                            Editar
                        </button>
                        <button class="btn btn-danger">
                            Apagar
                        </button>
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>

        <h2 class="my-2">
            Formação
        </h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Instituição de ensino</th>
                    <th class="hide-sm">Formação</th>
                    <th class="hide-sm">Duração</th>
                    <th>Editar ou Apagar</th>
                </tr>
            </thead>
            <?php
                $i = 0;
                while ($i < count($forma)) {
                    $formacao = $forma[$i][1];
                    $escola = $forma[$i][2];
                    $inicio = $forma[$i][4];
                    $fim = $forma[$i][5];
                    $atual = $forma[$i][6]
            ?>
            <tbody>
                <tr>
                    <td><?=$escola?></td>
                    <td class="hide-sm"><?=$formacao?></td>
                    <td class="hide-sm">
                        <?php
                            if($fim == "0000-00-00"){?>
                        <?=$inicio?> - <?=$atual?>
                        <?php }
                               else{?>
                        <?=$inicio?>/<?=$fim?>
                        <?php }?>
                        <!--date("F j, Y");-->
                    </td>
                    <td>
                        <button class="btn btn-primary">
                            Editar
                        </button>
                        <button class="btn btn-danger">
                            Apagar
                        </button>
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>

        <div class="my-2">
            <button class="btn btn-danger">
                <i class="fas fa-user-minus"></i> Deletar minha conta
            </button>
        </div>
    </section>
</body>

</html>