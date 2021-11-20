<?php
    include_once "conexao.php";
    $formacao = $_POST['status'];
    $escola = $_POST['school'];
    $materia = $_POST['fieldofstudy'];
    $inicio = $_POST['from'];
    $fim = $_POST['to'];
    $atual = $_POST['atual'];
    $desc = $_POST['description'];


    //Cursando
    if(isset($_POST['atual'])){
        $query = mysqli_query($conn, "INSERT INTO tbformacao (
            formacao, escola, materia, inicio, fim, atual, descricao) VALUES(
            '$formacao','$escola','$materia','$inicio','$fim','$atual','$desc')");

        echo "Cursando";
    }

    //Finalizado
    else{
        $query = mysqli_query($conn, "INSERT INTO tbformacao (
            formacao, escola, materia, inicio, fim, descricao) VALUES(
            '$formacao','$escola','$materia','$inicio','$fim','$desc')");

        echo "Finalizado";
    }
    
    header('Location:../dashboard.php');
?>