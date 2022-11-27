<?php
    require_once("models/contacto.php");
    class contacto_controller {
        public static function crear(){
            $titulo = "Creacion de comentario de Contacto";
            require_once("views/templates/header.php");
            require_once("views/templates/navbar.php");
            require_once("views/contacto/crear.php");
            require_once("views/templates/footer.php");
        
        }
        public static function mostrar(){
           
            if ($_POST){
                
                if( !isset($_POST["token"]) || seg::validaSesion($_POST["token"])){
                 
               }

                $nombre = $_POST ["txtnombre_contacto"];
                $correo = $_POST ["txtcorreo_contacto"];
                $comentario = $_POST ["txtcomentario_contacto"];
                $contacto = new contacto($nombre, $correo, $comentario);
                $resultado = $contacto -> getDatos();

                $titulo = "Mostrar datos del contacto";
             require_once("views/templates/header.php");
             require_once("views/templates/navbar.php");
             require_once("views/contacto/mostrar.php");
             require_once("views/templates/footer.php");
            }
                    

        }
    }
