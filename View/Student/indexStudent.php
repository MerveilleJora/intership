<?php
    session_start();
    if(@$_SESSION['role'] != "Student")
    {
        header("location:../index.php");
        exit();
    }
?>
<html>
    <head>
        <title>
            Acceuil Student
        </title>
    </head>
    <body>
        <?php
            echo $_SESSION['role'];
            echo $_SESSION['name'];
        ?>
        <a href="../Deconnexion.php">Se déconnecter</a>
    </body>
</html>