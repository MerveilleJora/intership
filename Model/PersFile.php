<?php
class PersFile extends Manager
{
    private $file;
    private $id_pers;

    function createPersFile($id_pers, $file)
    {
        $this->getBdd();
        $values = ['id_pers' => $id_pers, 'file' => "'".$file."'"];
        $this->addValueTable('Pers_File', $values);
    }

    function deletePersFile($file, $id_pers)
    {
        $this->getBdd();
        $IdValues = ['$file' => "'".$file."'", 'id_pers' => $id_pers];
        return $this->deleteFromTable('Pers_File', $IdValues);
    }





    // SET
    function setId_pers($x)
    {
        if ($x < 0)
            $this->id_pers = 1;
        else 
            $this->id_pers = $x;
    }
    function setFile($f)
    {
        $this->file = $f;
    }

    // GET
    function getId_pers()
    { return $this->id_pers; }
    function getFile()
    {return $this->file;}
}

?>