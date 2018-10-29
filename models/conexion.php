<?php

class Conexion{

    public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=db_inventario", "root", "edwin123");
        return $link;
    }

}

?>