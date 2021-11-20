<!DOCTYPE html>
<html lang="en">
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
    <title>Registro</title>
  </head>
  <body>
    <nav class="navbar bg-dark">
      <h1>
        <a href="index.php"> <img class="brand" src="img/DigitalStudyV1.png" alt=""></a>
      </h1>
      <ul>
        <li><a href="profiles.php">Professores</a></li>
        <li><a href="profiles copy.php">Estudantes</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
    <section class="container">
      <h1 class="large text-primary"><i class="fas fa-user"> </i> Criar uma Conta</h1>
      <p class="lead"></i> Insira seus dados</p>
      <form action="register2.php" class="form" method="POST">
        <div class="form-group">
          <input name="nome" type="text" placeholder="Nome" required />
        </div>
        <div class="form-group">
          <input name="rg" type="text" placeholder="rg" maxlength="9" required/>
        </div>
        <div class="form-group">
          <input name="cep" type="text" placeholder="cep"  maxlength="8" required/>
        </div>
        <div class="form-group">
          <input name="email" type="email" placeholder="Email" required/>
        </div>
        <div class="form-group">
          <input name="senha" type="password" placeholder="Senha" minlength="6" required/>
        </div>
        <input type="submit" value="Registrar" class="btn btn-primary" />
      </form>
      <p class="my-1">
        Já tem uma conta ? <a href="login.php">Entrar</a>
      </p>
    </section>
  </body>
</html>