<?php
require "../Controller/Manager.php";

class Company extends Manager
{
    private $id_cmp;
    private $Name;
    private $Domain;
    private $Number_intern;

    function selectIdCmp($company)
    {
        $this->getBdd();
        return $this->selectById('Company', 'Company', 'Name', $company, 'ID_Cmp'); // Table, Objet, condition, valeur, column
    }

    function createCompany()
    {
        $this->getBdd();
        $values = ['Name' => "'".$this->getName()."'", 'Domain' => "'".$this->getDomain()."'", 'Number_intern' => $this->getNumber_intern()];
        $this->addValueTable('Company', $values);
    }

    function deleteCompany()
    {
        $this->getBdd();
        $IdValues = ['$id_cmp' => $this->getId_cmp()];
        return $this->deleteFromTable('Company', $IdValues);
    }




    // SET
    function setId_cmp($id)
    {
        if($id < 0)
            $this->id_cmp = 1;
        else
            $this->id_cmp = $id;
    }
    function setName($x)
    {
        if($x == "")
            $this->Name = "NONE";
        else
            $this->Name = $x;
    }
    function setDomain($x)
    {
        if($x == "")
            $this->Domain = "NONE";
        else 
            $this->Domain = $x;
    }
    function setNumber_intern($x)
    {
        if($x < 0)
            $this->Number_intern = 0;
        else 
            $this->Number_intern = $x;
    }

    // GET
    function getId_cmp()
    {
        return $this->id_cmp;
    }
    function getName()
    {
        return $this->Name;
    }
    function getDomain()
    {
        return $this->Domain;
    }
    function getNumber_intern()
    {
        return $this->Number_intern;
    }
}