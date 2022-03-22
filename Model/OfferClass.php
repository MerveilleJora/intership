<?php
require "../Controller/Manager.php";

class OfferClass extends Manager
{
    private $id_offer;
    private $class;

    // SET
    function setId_offer($x)
    {
        if ($x < 0)
            $this->id_offer = 1;
        else 
            $this->id_offer = $x;
    }
    function setClass($x)
    {
        if ($x == "")
            $this->class = "none";
        else 
            $this->class = $x;
    }

    // GET
    function getId_offer()
    { return $this->id_offer; }
    function getClass()
    { return $this->class; }
    
}