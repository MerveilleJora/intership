<?php
require "../Controller/Manager.php";

class OfferAd extends Manager
{
    private $id_offer;
    private $id_ad;
    private $city;

    function createOfferAd()
    {
        $this->getBdd();
        $values = ['id_offer' => $this->getId_offer(), 'id_ad' => $this->getId_ad()];
        $this->addValueTable('Offer_Ad', $values);
    }

    function deleteOfferAd($id_offer, $id_ad)
    {
        $this->getBdd();
        $IdValues = ['$id_offer' => $id_offer, 'id_ad' => $id_ad];
        $this->deleteFromTable('offer_ad', $IdValues);
    }

    function selectIdAdd()
    {
        $this->getBdd();
        return $this->selectById('Offer_Ad', 'OfferAd', "city", $this->getCity(), 'ID_Ad');
    }





    // SET
    function setId_offer($x)
    {
        if ($x < 0)
            $this->id_offer = 1;
        else 
            $this->id_offer = $x;
    }
    function setId_ad($x)
    {
        if ($x < 0)
            $this->id_ad = 1;
        else
            $this->id_ad = $x;
    }
    function setCity($x)
    {
        if ($x == "")
            $this->city = "none";
        else 
            $this->city = $x;
    }


    // GET
    function getId_offer()
    { return $this->id_offer; }
    function getId_ad()
    { return $this->id_ad; }
    function getCity()
    { return $this->city; }
    
}