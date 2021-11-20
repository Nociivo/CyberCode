<?php
    include_once "conexao.php";
    $idBio = $_GET['idBio'];

    $del = mysqli_query($conn,"DELETE FROM tbbioredes WHERE idBio = '$idBio'");
     
?>