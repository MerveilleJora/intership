<?php
abstract class Manager
{
    private static $_bdd;

    private static function setBdd()
    {
        try
        {
            self::$_bdd = new PDO('mysql:host=localhost;dbname=myintership','root');
            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        catch(Exception $e)
        {
            die("Connection failed: " . $e->getMessage());
        }   
    }

    protected function getBdd()
    {
        if(self::$_bdd == null)
            $this->setBdd();
        return self::$_bdd;
    }

    // ================================= Connexion 

    protected function selectIdConnexion($mail, $password) // Ajout de l'object
    {
        $this->getBdd();
        $var = [];
        // SELECT ID_Person FROM person WHERE Mail="lea.laborde@viacesi.fr" AND Pwd="cesi123";
        $req = self::$_bdd->prepare("SELECT ID_Person FROM Person WHERE Mail = '".$mail."' AND Pwd='".$password."';"); // Error
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Person($data);
        }
        return $var;
        $req->closeCursor();
    }

    // récupéré toutes les donnée d'une table
    protected function getAll($table, $obj)
    {
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '. $table);
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    // Récupéré les valeurs d'une table avec le nom des valeurs des colonnes
    protected function selectById($table, $obj, $condition, $value, $column)
    {
        $var = [];
        $req = self::$_bdd->prepare('SELECT '.$column.' FROM '.$table.' WHERE '.$condition.' like '.$value);
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }

    // Ajouter une valeur
    protected function addValueTable($table, $values) // ======================================================================
    {
        // INSERT INTO TB (column) VALUE (valeur)
        // Parathèses de la rqt pour les column et les valeurs
        $debut_rqt = '(';
        $fin_rqt = '(';

        // Ajout des colonnes et valeurs dans les parenthèses
        foreach($values as $key => $donnee)
        {
            $debut_rqt = $debut_rqt.$key.' ';
            $fin_rqt = $fin_rqt."'".$donnee."' ";
        }

        // Assemblement du tout pour avoir la rqt entière
        $debut_rqt = $debut_rqt.')'; $fin_rqt = $fin_rqt.')';

        // On enlève la dernière virgule dans chaque parenthèse
        $debut_rqt=str_replace(' ', ',', $debut_rqt); $fin_rqt=str_replace(' ', ',', $fin_rqt);
        $debut_rqt=str_replace(',)', ')', $debut_rqt); $fin_rqt=str_replace(',)', ')', $fin_rqt);

        // Assemblement final avec ajout de SELECT @@IDENTITY pour récupérer l'id
        $rqt = 'INSERT INTO '.$table.$debut_rqt.' VALUE '.$fin_rqt."; SELECT @@IDENTITY";

        // Execution de la rqt et renvoie des données
        try
        {
            $req = self::$_bdd->prepare($rqt);
            $req->execute();
            $data = $req->fetch(PDO::FETCH_ASSOC);
            return $data;
            $req->closeCursor();
        }
        catch(Exception $e)
        {
            echo "Failed: " . $e->getMessage();
        }
    }
    
    protected function UpdTable($table, $values, $id, $idValue)
    {
        $rqt = "UPDATE ".$table." SET ";
        $suite_rqt = "";
        foreach($values as $key => $val)
        {
            $suite_rqt = $suite_rqt.$key." = '".$val."', ";
        }
        $rqt = $rqt.$suite_rqt.'WHERE '.$id.'='.$idValue;
        $rqt=str_replace(', W', ' W', $rqt);
        try
        {
            $req = self::$_bdd->prepare($rqt);
            $req->execute();
            $req->closeCursor();
        }
        catch(Exception $e)
        {
            echo "Failed: " . $e->getMessage();
        } 
    }

    protected function deleteFromTable($table, $IdValues)
    {
        $rqt = "DELETE FROM ".$table." WHERE ";
        $debut_rqt = "";
        foreach($IdValues as $key => $val)
        {
            $debut_rqt = $debut_rqt.$key." = ".$val." AND ";
        }
        $rqt = $rqt.$debut_rqt.";";
        $rqt=str_replace('AND ;', ';', $rqt);

        try
        {
            $req = self::$_bdd->prepare($rqt);
            $req->execute();
            $req->closeCursor();
            echo "Suppression effectué";
        }
        catch(Exception $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}