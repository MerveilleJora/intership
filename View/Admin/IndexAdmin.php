<?php
    session_start();
    if(@$_SESSION['role'] != "Admin")
    {
        header("location:../index.php");
        exit();
    }
?>
<html>
    <head>
        <title>
            Acceuil Admin
        </title>
        <link rel="stylesheet" href="../../assets/css">
    </head>
    <body>
        <?php require '../headers/header_admin.php' ?>

    </body>
</html>