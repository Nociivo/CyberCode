<?php
    include_once "conexao.php";
    $formacao = $_POST['status'];
    $escola = $_POST['school'];
    $materia = $_POST['fieldofstudy'];
    $inicio = $_POST['from'];
    $fim = $_POST['to'];
    $atual = $_POST['atual'];
    $desc = $_POST['description'];

    $query = mysqli_query($conn, "UPDATE tbformacao SET 
        formacao='$formacao', escola='$escola', materia=$materia,
        inicio='$inicio', fim='$fim', atual='$atual', descricao='$desc'"
        );
    
    header('Location:../dashboard.php');
?>