<?php
    include_once "conexao.php";
    $materia = $_POST['title'];
    $escola = $_POST['company'];
    $inicio = $_POST['from'];
    $fim = $_POST['to'];
    $atual = $_POST['atual'];
    $desc = $_POST['description'];


    //Atual Emprego
    if(isset($_POST['atual'])){
        $query = mysqli_query($conn, "INSERT INTO tbexperiencia (
            materia, escola, inicio, fim, atual, descricao) VALUES(
            '$materia','$escola','$inicio','$fim','$atual','$desc')");

        echo "Atual Emprego.";
    }

    //Antigo Emprego
    else{
        $query = mysqli_query($conn, "INSERT INTO tbexperiencia (
            materia, escola, inicio, fim, descricao) VALUES (
            '$materia','$escola','$inicio','$fim','$desc')");

        echo "Cadastrado como antigo emprego";
    }

    header('Location:../dashboard.php');
?>
