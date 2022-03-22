<?php
class File extends Manager
{
    private $file;

    function createFile($file)
    {
        $this->getBdd();
        $values = ['file' => "'".$file."'"];
        $this->addValueTable('File', $values);
    }

    function deleteFile($file)
    {
        $this->getBdd();
        $IdValues = ['$file' => "'".$file."'"];
        return $this->deleteFromTable('File', $IdValues);
    }

    // SET
    function setFile($f)
    {
        $this->file = $f;
    }
    // GET
    function getFile()
    {
        return $this->file;
    }
        
}

?>