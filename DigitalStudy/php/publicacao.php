<?php
    include_once "conexao.php";
    $imagem = $_FILES['imagem']['name'];
    $publicacao = $_POST['pub'];
    $video = $_FILES['video']['name'];

    //Pasta onde o imagem vai ser salvo
    $_UP['pasta'] = '../upload/';

    $nome_final = $_FILES['imagem']['name'];
    $nome_final2 = $_FILES['video']['name'];

    //Move o imagem para a pasta escolhida
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'] . $nome_final)) {
        $query = mysqli_query($conn, "INSERT INTO tbpub (
            publicacoes, imagem, data) VALUES(
            '$publicacao','$nome_final',NOW())");

        echo "Imagem e pub. Cadastrada com Sucesso.";
    }
    else if (move_uploaded_file($_FILES['video']['tmp_name'], $_UP['pasta'] . $nome_final2)) {
        $query = mysqli_query($conn, "INSERT INTO tbpub (
            publicacoes, video, data) VALUES(
            '$publicacao','$nome_final2',NOW())");

        echo "Imagem e pub. Cadastrada com Sucesso.";
    }

    //Envia somente a pub para o banco
    else{
        $query = mysqli_query($conn, "INSERT INTO tbpub (
            publicacoes,data) VALUES(
            '$publicacao', NOW())");

        echo "Publicação cadastrada com Sucesso.";
    }

    header ("Location: ../posts.php")

?>