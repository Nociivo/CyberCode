<?php
    include_once ("conexao.php");
    $bio = $_POST['bio'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $youtube = $_POST['youtube'];
    $linkedin = $_POST['linkedin'];
    $instagram = $_POST['instagram'];

        $query = mysqli_query($conn, "UPDATE tbbioredes SET 
            bio='$bio', twitter='$twitter', facebook='$facebook',
            youtube='$youtube', linkedin='$linkedin', instagram='$instagram'"
            );
            
    header('Location:../dashboard.php');
?>