<?php 
require_once("models/contacto.php");
class contacto_controller{
    public static function crear(){
      if( isset( $_SESSION["usuario"])){
        $titulo="Comentario";
         require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/contacto/craer.php");
            require_once("views/template/footer.php");
           
            
    }else {
        header("location:index.php?c=".seg::codificar("contenido")."&m=".seg::codificar("contenido"));


    }
    
    }
    public static function mostrar(){
      if ($_POST) {
        //ESTE METODO VALIDAR_SESSION ESTA EN utils/seg.php/validarSession
        //si el usuario no es valido se envia un mensaje de acceso restringido
    if (!isset($_POST["token"]) || !seg::validaSesion($_POST["token"])) {
        echo "Acceso Restringido";
        exit();
    }



        empty($_POST["txtNombre_contacto"])?$error[0]="El nombre del contacto es necesario ":$nombre= $_POST["txtNombre_contacto"];
        empty($_POST["txtCorreo"])?$error[1]="El correo del contacto es necesario ":  $correo= $_POST["txtCorreo"];
        
        $comentario= $_POST["txtComentario"];
        
       if (isset($error)){
        $titulo="Creacion de comentario de contacto";
        require_once("views/template/navbar.php");
        require_once("views/template/header.php");
        require_once("views/contacto/crear.php");
        require_once("views/template/footer.php");


       }else{
        $nombre= filter_var($nombre,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $correo= filter_var($correo,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $comentario= filter_var($comentario,FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $contacto= new contacto($nombre,$correo,$comentario);
        $resultados= $contacto->getDatos();
        $titulo="Mostrar datos de contacto";
        require_once("views/template/navbar.php");
        require_once("views/template/header.php");
        require_once("views/contacto/mostrar.php");
        require_once("views/template/footer.php");

      }

      }
    }
}

?>