<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
  header('Location: login.php');
  exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT * FROM tbaluno where emailAluno = '{$usuario}' AND senhaAluno = '{$senha}'";

$resultado = mysqli_query($conn, $query);

$row = mysqli_num_rows($resultado);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: dashboard.html');
    exit();
} 
else {
    header('Location: login.php');
    exit();
}


?>
