<?php
require "header.php";
?>
<div class="Cadre_form Cadre_Offer Center">
        <form action="" method="POST">
            <h2 class="text-center">Create a new offer</h2>
            <label class="LBL">Internship Title</label>
            <input class="Ipt borderproperties" type="text" name="post"><br>
            <label class="LBL">Skills</label><br>
            <textarea class="Ipt_Skill borderproperties" name="skill" placeholder="What kind of skills are in demand?"></textarea><br>
            <label class="LBL">Location(s)</label>
            <input class="Ipt borderproperties" type="text" name="tb_ad"><br>
            <label class="LBL">Internship's time in months</label>
            <input class="Ipt borderproperties" type="text" name="Duration"><br>
            <label class="LBL">Remuneration basis</label>
            <input class="Ipt borderproperties" type="text" name="Remu"><br>
            <label class="LBL">Number of places available</label>
            <input class="Ipt borderproperties" type="text" name="Nb_Place"><br><br>
            
            <input class="btn_validate" type="submit" name="submit" value="Create">
        </form>
    </div>
<?php
require "footer.php";
?>