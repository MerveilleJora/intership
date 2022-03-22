<?php
require "../Controller/Manager.php";

class AdCmp extends Manager
{
    private $id_cmp;
    private $id_ad;

    function createAdCmp($id_cmp, $id_ad)
    {
        $this->getBdd();
        $values = ['id_cmp' => $id_cmp, 'id_ad' => $id_ad];
        return $this->addValueTable('cmp_ad', $values);
    }

    function deleteAdCmp($id_cmp, $id_ad)
    {
        $this->getBdd();
        $IdValues = ['$id_cmp' => $id_cmp, 'id_ad' => $id_ad];
        return $this->deleteFromTable('cmp_ad', $IdValues);
    }
    
    // SET
    function setId_cmp($id)
    {
        if($id < 0)
            $this->id_cmp = 1;
        else
            $this->id_cmp = $id;
    }
    function setId_ad($id)
    {
        if($id < 0)
            $this->id_ad = 1;
        else
            $this->id_ad = $id;
    }

    // GET
    function getId_cmp()
    {
        return $this->id_cmp;
    }
    function getId_ad()
    {
        return $this->id_ad;
    }
}