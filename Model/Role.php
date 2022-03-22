<?php
require "../Controller/Manager.php";

class Role extends Manager
{
    private $id_role;
    private $role;

    function createRole($role)
    {
        $this->getBdd();
        $values = ['role' => "'".$role."'"];
        $this->addValueTable('Role', $values);
    }

    function deleteRole($id_role)
    {
        $this->getBdd();
        $IdValues = ['$id_role' => $id_role];
        return $this->deleteFromTable('Role', $IdValues);
    }




    // SET
    function setId_role($id)
    {
        if($id < 0)
        {$this->id_role = 1;}
        else {$this->id_role = $id;}
    }
    function setRole($x)
    {
        if($x == "")
        {$this->role = "none";}
        else {$this->role = $x;}
    }

    // GET
    function getId_role()
    {
        return $this->id_role;
    }
    function getRole()
    {
        return $this->role;
    }
}