<?php
    include_once "conexao.php";
    $imagem = $_FILES['imagem']['name'];
    $coment = $_POST['coment'];
    $video = $_FILES['video']['name'];

    //Pasta onde o imagem vai ser salvo
    $_UP['pasta'] = '../upload/';

    $nome_final = $_FILES['imagem']['name'];
    $nome_final2 = $_FILES['video']['name'];

    //Move o imagem para a pasta escolhida
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'] . $nome_final)) {
        $query = mysqli_query($conn, "INSERT INTO tbcoment (
            coment, imagem, data) VALUES(
            '$coment','$nome_final',NOW())");

        echo "Imagem e coment Cadastrada com Sucesso.";
    }
    //Move o video para a pasta escolhida
    else if (move_uploaded_file($_FILES['video']['tmp_name'], $_UP['pasta'] . $nome_final2)) {
        $query = mysqli_query($conn, "INSERT INTO tbcoment (
            coment, video, data) VALUES(
            '$coment','$nome_final2',NOW())");

        echo "Video e coment cadastrado com Sucesso.";
    }

    //Envia somente a pub para o banco
    else{
        $query = mysqli_query($conn, "INSERT INTO tbcoment (
            coment,data) VALUES(
            '$coment', NOW())");

        echo "Comentario cadastrado com Sucesso.";
    }

?>