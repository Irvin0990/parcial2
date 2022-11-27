<?php
    require_once("utils/seg.php");

    class principal_controller {
        public static function index(){
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            if(isset($_COOKIE["usuario"])){
                $_SESSION["usuario"] = $_COOKIE["usuario"];
                $_SESSION["nombre"] = $_COOKIE["nombre"];

            }
            $titulo = "Pagina";
            require_once("views/templates/header.php");
            require_once("views/templates/navbar.php");
            require_once("views/principal/index1.php");
            require_once("views/templates/footer.php");
            

        }
    }

?>