<?php
session_start();
include('conexao.php');

if(empty($_POST['nome']) || empty($_POST['rg']) || empty($_POST['cep']) || empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: register.php');
    exit();
}

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tbaluno(nomeAluno, rgAluno, cepAluno, emailAluno, senhaAluno) VALUES ('$nome', '$rg', '$cep', '$email', '$senha')";

$enviado = mysqli_query($conn, $sql);

$query = "SELECT * FROM tbaluno where nomeAluno = '{$nome}' AND senhaAluno = '{$senha}'";

$resultado = mysqli_query($conn, $query);

$row = mysqli_num_rows($resultado);

if($row == 1) {
    $_SESSION['nome'] = $nome;
    header('Location: dashboard.php');
    exit();
}  


?>