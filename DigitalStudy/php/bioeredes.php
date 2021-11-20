<?php
    include_once "conexao.php";
    $bio = $_POST['bio'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $linkedin = $_POST['linkedin'];
    $instagram = $_POST['instagram'];

        $query = mysqli_query($conn, "INSERT INTO tbbioredes (
            bio, twitter, facebook, youtube, linkedin, instagram) VALUES(
            '$bio','$twitter','$facebook','$youtube','$linkedin','$instagram')");

    header('Location:../dashboard.php');
?>