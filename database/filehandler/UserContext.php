<?php

class registroContext{

public $db;

public $json;

public function __construct($directory)
{
    
    $this->json= new Json($directory,"Configuration");
    $configuration = $this->json->ReadConfiguration();
    $this->db = new mysqli($configuration->server,$configuration->user,$configuration->password,$configuration->database);
    if($this->db->connect_error){
        exit('Error');
    }
}

}
?>