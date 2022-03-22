<?php
require "../Model/Company.php";

class ManagerCompany
{
    private Company $cmp;

    public function addCompany($Name, $Domain, $Number_intern)
    {
        // TB Company
        $cmp = new Company();
        $cmp->setName($Name);
        $cmp->setDomain($Domain);
        $cmp->setNumber_intern($Number_intern);
        $cmp->createCompany();

        // TB Address
    }
}

?>