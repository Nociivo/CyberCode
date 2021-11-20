<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/style.min.css?ts=<?=time()?>" />
    <title>Login</title>
  </head>
  <body>
    <nav class="navbar bg-dark">
      <h1>
        <a href="index.php"> <img class="brand" src="img/DigitalStudyV1.png" alt=""></a>
      </h1>
      <ul>
      <li><a href="profiles.php">Professores</a></li>
        <li><a href="profiles copy.php">Estudantes</a></li>
        <li><a href="register.php">Registro</a></li>
      </ul>
    </nav>
    <section class="container">
      <!-- Alert -->
      <div class="alert alert-danger">
        Login invalido
      </div>
      <h1 class="large text-primary"><i class="fas fa-user"> </i> Entre na sua conta</h1>
      </h1>
      <p class="lead"></i> Login</p>
      <form action="php/login2.php" class="form" method="POST">
        <div class="form-group">
          <input name="usuario" type="email" placeholder="Email" />
        </div>
        <div class="form-group">
          <input name="senha" type="password" placeholder="Senha" minlength="6" />
        </div>
        <input type="submit" value="Login" class="btn btn-primary" />
      </form>
      <p class="my-1">
        Não tem uma conta? <a href="register.php">Registrar</a>
      </p>
    </section>
  </body>
</html>

