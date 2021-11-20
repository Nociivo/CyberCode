<?php
    include_once "conexao.php";
    $materia = $_POST['title'];
    $escola = $_POST['company'];
    $inicio = $_POST['from'];
    $fim = $_POST['to'];
    $atual = $_POST['atual'];
    $desc = $_POST['description'];

    $query = mysqli_query($conn, "UPDATE tbexperiencia SET 
        materia='$materia', escola='$escola', inicio='$inicio',
        fim='$fim', atual='$atual', descricao='$desc'"
        );

    header('Location:../dashboard.php');
?>
