<!DOCTYPE php>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/CSS/generalStyle.css">
    <link rel="stylesheet" href="../assets/CSS/managementCompany.css">
    <link rel="stylesheet" href="../assets/CSS/burger_nav.css">
    <link rel="icon" class="head_logo" href="../assets/IMG/logo_site_rond.png"/>
    <title>Companies</title>
  </head>

<body>
<?php
require "headers/header_admin.php";
?>
<main>
    <section class="filter">
            <h1>Filter</h1><br>
            <label class="choicefiltre" id="name">Name</label>
            <select name="Filtername"></select><br><br>
            <label class="choicefiltre" id="city" value="à mettre">City</label>
            <select  name="Filercity" value="à mettre"><select><br><br>
            
    </section>
    <section class="sec">
    <!-- ================================= Petits Cadre -->
        <div class="petit_cadre">
            <div class="Cadre_form">
                        <h2>Company</h2>
                        <label>Location</label>
            </div>
            <div class="Cadre_form">
                        <h2>Company</h2>
                        <label>Location</label>
            </div>
            <div class="Cadre_form">
                        <h2>Company</h2>
                        <label>Location</label>
            </div>
            
        </div>
    <!-- ================================= Gros Cadre -->
        <div class="Cadre_form gros_cadre">
                <div class="div_left_right">
                    <div>
                        <h2>Company</h2>
                        <label>Location</label>
                    </div>
                </div>
        <hr class="barre violetBG">
                <div class="details">
                    <p>Details Offers</p>
                    <p>
                        Emensis itaque difficultatibus multis et
                        nive obrutis callibus plurimis ubi prope
                        Rauracum ventum est ad supercilia fluminis
                        Rheni, resistente multitudine Alamanna pontem
                        suspendere navium conpage Romani vi nimia vetabantur
                        ritu grandinis undique convolantibus telis, 
                        et cum id inpossibile videretur, 
                        imperator cogitationibus magnis attonitus, 
                        quid capesseret ambigebat.
                        <br>
                    </p>
                <div>
                
        <div class="btns">
            <img class="pointer" src="../assets/img/modif.png" alt="modify" width="50"/>
            <img class="pointer" src="../assets/img/sup.png" alt="delete" width="50"/>
        </div>

        <hr class="barre violetBG">
        <div>
            <br><input id="texteval" class="Center" type="text"/>
            <br><input id="" class="btn_validate violetBG" type="submit" name="submit" value="Evaluate the company">
        </div>
    </section>
</main>
<?php
require "footer.php";
?>