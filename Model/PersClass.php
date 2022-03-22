<?php
require "../Controller/Manager.php";

class PersClass extends Manager
{
    private $id_pers;
    private $class;

    function createPersClass($id_pers, $class)
    {
        $this->getBdd();
        $values = ['id_pers' => $id_pers, 'class' => "'".$class."'"];
        $this->addValueTable('Pers_Class', $values);
    }

    function deletePersClass($id_pers, $class)
    {
        $this->getBdd();
        $IdValues = ['$id_pers' => $id_pers, 'class' => "'".$class."'"];
        return $this->deleteFromTable('Pers_Class', $IdValues);
    }





    // SET
    function setId_pers($x)
    {
        if ($x < 0)
            $this->id_pers = 1;
        else
            $this->id_pers = $x;
    }
    function setClass($x)
    {
        if ($x == "")
            $this->class = "none";
        else 
            $this->class = $x;
    }

    // GET
    function getId_pers()
    { return $this->id_pers; }
    function getClass()
    { return $this->class; }
    
}