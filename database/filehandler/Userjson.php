<?php


class Json implements Ifile
{

    public function __construct($directory,$fileName)
    {
        
        $this->directory = $directory;
        $this->filename = $fileName;
    }
    
    public function ReadConfiguration()
    {
       
        $path= $this->directory."/".$this->filename .".json";

        if(file_exists($path)){
            $file = fopen($path,"r");
            $content=fread($file,filesize($path));
            fclose($file);
            return json_decode($content);
        }else{
            return false;
        }
    }
}