<?php
require "../Controller/Manager.php";

class Offer extends Manager
{
    private $id_offer;
    private $post;
    private $skill;
    private $duration;
    private $date;
    private $remu;
    private $nb_place;
    private $id_cmp;


    function createOffer()
    {
        $this->getBdd();
        $values = ['post' => "'".$this->getPost()."'", 'skill' => "'".$this->getSkill()."'", 'duration' => $this->getDuration(), 'date' => $this->getDate(), 'remu' => $this->getRemu(), 'nb_place' => $this->getNb_place(), 'id_cmp' => $this->getId_cmp()];
        return $this->addValueTable('Offer', $values);
    }

    function deleteCompany()
    {
        $this->getBdd();
        $IdValues = ['$id_offer' => $this->getId_offer()];
        return $this->deleteFromTable('Offer', $IdValues);
    }






    // SET
    function setId_offer($x)
    {
        if ($x < 0)
           $this->id_offer = 1;
        else 
           $this->id_offer = $x;
    }
    function setPost($x)
    {
        if ($x == "")
           $this->post = "none";
        else
           $this->post = $x;
    }
    function setSkill($x)
    {
        if ($x == "")
           $this->skill = "none";
        else 
           $this->skill = $x;
    }
    function setDuration($x)
    {
        if ($x < 0)
           $this->duration = 0;
        else
           $this->duration = $x;
    }
    function setDate($x)
    {
        if ($x == "")
           $this->date = "00/00/0000";
        else 
           $this->date = $x;
    }
    function setRemu($x)
    {
        if ($x < 0)
           $this->remu = 0;
        else 
           $this->remu = $x;
    }
    function setNb_place($x)
    {
        if ($x < 0)
           $this->nb_place = 0;
        else 
           $this->nb_place = $x;
    }
    function setId_cmp($x)
    {
        if ($x < 0)
           $this->id_cmp = 1;
        else 
           $this->id_cmp = $x;
    }

    // GET
    function getId_offer()
    { return $this->id_offer; }
    function getPost()
    { return $this->post; }
    function getSkill()
    { return $this->skill; }
    function getDuration()
    { return $this->duration; }
    function getdate()
    { return $this->date; }
    function getRemu()
    { return $this->remu; }
    function getNb_place()
    { return $this->nb_place; }
    function getId_cmp()
    { return $this->id_cmp; }
    
}