<?php
include_once('conexao.php');
    $id = $_GET['codAluno'];
    //... look up username from database ...
    header("Location: ../profile.php" . $id);
