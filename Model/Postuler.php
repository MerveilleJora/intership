<?php
require "../Controller/Manager.php";

class Postuler extends Manager
{
    private $id_Pers;
    private $id_Offer;

    function createPostuler($id_pers, $id_Offer)
    {
        $this->getBdd();
        $values = ['id_pers' => $id_pers, 'id_Offer' => $id_Offer];
        $this->addValueTable('Postuler', $values);
    }

    function deletePostuler($id_pers, $id_Offer)
    {
        $this->getBdd();
        $IdValues = ['$id_pers' => $id_pers, 'id_Offer' => $id_Offer];
        return $this->deleteFromTable('Postuler', $IdValues);
    }






    // SET
    function setId_Pers($id)
    {
        if($id < 0)
        {$this->id_Pers = 1;}
        else {$this->id_Pers = $id;}
    }
    function setId_Offer($x)
    {
        if($x < 0)
        {$this->id_Offer = 0;}
        else {$this->id_Offer = $x;}
    }

    // GET
    function getId_Pers()
    {
        return $this->id_Pers;
    }
    function getId_Offer()
    {
        return $this->id_Offer;
    }
}