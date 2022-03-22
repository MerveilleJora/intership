<?php
require "../Controller/Manager.php";

class Favoris extends Manager
{
    private $id_Pers;
    private $id_Offer;

    function createFavoris($id_Pers, $id_Offer)
    {
        $this->getBdd();
        $values = ['id_Pers' => $id_Pers, 'id_Offer' => $id_Offer];
        $this->addValueTable('Favoris', $values);
    }

    function deleteFavoris($id_Pers, $id_Offer)
    {
        $this->getBdd();
        $IdValues = ['$id_pers' => $id_Pers, 'id_offer' => $id_Offer];
        return $this->deleteFromTable('Favoris', $IdValues);
    }




    // SET
    function setId_Pers($id)
    {
        if($id < 0)
            $this->id_Pers = 1;
        else
            $this->id_Pers = $id;
    }
    function setId_Offer($x)
    {
        if($x < 0)
            $this->id_Offer = 0;
        else
            $this->id_Offer = $x;
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