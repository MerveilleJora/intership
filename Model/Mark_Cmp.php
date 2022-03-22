<?php
require "../Controller/Manager.php";

class Mark_Cmp extends Manager
{
    private $id_cmp;
    private $value;

    function createMarkCmp($id_cmp, $value)
    {
        $this->getBdd();
        $values = ['id_cmp' => $id_cmp, 'value' => $value];
        $this->addValueTable('Mark_Cmp', $values);
    }

    function deleteMarkCmp($id_cmp, $value)
    {
        $this->getBdd();
        $IdValues = ['$id_cmp' => $id_cmp, 'value' => $value];
        return $this->deleteFromTable('mark_cmp', $IdValues);
    }




    // SET
    function setId_cmp($x)
    {
        if ($x < 0)
            $this->id_cmp = 1;
        else
            $this->id_cmp = $x;
    }
    function setValue($x)
    {
        if ($x < 0 && $x > 10)
            $this->value = 0;
        else 
            $this->value = $x;
    }

    // GET
    function getId_cmp()
    {
        return $this->id_cmp;
    }
    function getValue()
    {
        return $this->value;
    }
}