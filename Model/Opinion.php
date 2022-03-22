<?php
require "../Controller/Manager.php";

class Opinion extends Manager
{
    private $com;

    function createOpinion($com)
    {
        $this->getBdd();
        $values = ['com' => "'".$com."'"];
        $this->addValueTable('opinion', $values);
    }

    function deleteOpinion($com)
    {
        $this->getBdd();
        $IdValues = ['$com' => "'".$com."'"];
        return $this->deleteFromTable('opinion', $IdValues);
    }



    // SET
    function setCom($x)
    {
        if ($x == "")
        {$this->com = "none";}
        else {$this->com = $x;}
    }

    // GET
    function getCom() 
    {
        return $this->com;
    }
    
}