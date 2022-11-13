<?php
    class bienvenido_controllers{
        public static function bienvenido(){
            $title = "Bienvenido";
            require_once("views/template/header.php");
            require_once("views/bienvenido/index.php");
            
        }
    }
?>