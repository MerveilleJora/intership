<?php
require_once "../Model/Person.php";
require_once "Manager.php"; 

class ManagerConnexion extends Manager
{
    private Person $prs;
    
    public function checkIfExist($mail, $password)
    {
        // Connexion à la base de donnée
        $this->getBdd();
        // SELECT ID_Person FROM person WHERE Mail="lea.laborde@viacesi.fr" AND Pwd="cesi123";
        return $this->selectIdConnexion($mail, $password);
    }
}
?>