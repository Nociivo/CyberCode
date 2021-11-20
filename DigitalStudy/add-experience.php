<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/style.min.css?ts=<?=time()?>" />
    <title>Bem-vindo ao Digital Study</title>
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
            Adicionar Experiência
        </h1>
        <p class="lead">
            <i class="fas fa-code-branch"></i> Adicione qualquer experiência que você tenha tido como professor
        </p>
        <small>* Campo obrigatório</small>
        <form class="form" method="POST" action="php/experiencia.php">
            <div class="form-group">
                <input type="text" placeholder="* Matéria" name="title" id="title" required />
            </div>
            <div class="form-group">
                <input type="text" placeholder="* Escola/Faculdade" name="company" id="company" required />
                <div class="form-group">
                    <h4>Começo</h4>
                    <input type="date" name="from" id="from" min="2010-01-01" max="<?=date("Y-m-d");?>" />
                </div>
                <div class="form-group">
                    <h4>Fim</h4>
                    <input type="date" name="to" id="to" min="2010-11-30" max="<?=date("Y-m-d");?>" />
                </div>
                <div class="form-group">
                    <p><input type="checkbox" name="atual" id="atual" value="Atualmente" onclick="myFunction()" /> Atualmente</p>
                </div>
                <div class="form-group">
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="Descrição"></textarea>
                </div>
                <input type="submit" class="btn btn-primary my-1" value="Enviar" />
                <a class="btn my-1" href="dashboard.php">Voltar</a>
        </form>
    </section>
    <script>
        function myFunction() {
            if (atual.checked == true) {
                document.getElementById("to").disabled = true;
            } else {
                document.getElementById("to").disabled = false;
            }
        }
    </script>
</body>
</html>