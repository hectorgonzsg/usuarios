<?php
    class usuarios{
    private $file,
            $error;
            
    function  __construct($archivo){
        if(isset($_FILE[$archivo])&& $_FILE[$archivo]['name'] != ''){
            $this->file=$archivo;
        }else {
            $this->error=1000;
        }
    }
    function cogerNombre(){
        $parts = pathinfo($this->file);
        $nombre = $parts[filename];
        return $nombre;
    }
    
    function subirArchivo(){
        if(move_uploaded_file($this->file ,'./private')){
            echo 'Se ha subido';
        }else {echo 'nada de nada';}; 
    }
    
    function añadirUsuario(){
        $this->cogerNombre();
        $this->subirArchivo();
    }
}
