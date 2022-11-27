<?php
require_once("utils/seg.php");
require_once("models/producto.php");
    class producto_controller{

        public static function productos(){

           
            $titulo = "Productos";
            require_once("views/templates/header.php");
            require_once("views/templates/navbar.php");
            require_once("views/principal/index1.php");
            require_once("views/templates/footer.php");
            


        }

        public static function validar(){
            if ($_POST) {
                $token= filter_var($_POST["token"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                if (!isset($_POST["token"]) || !seg::validaSesion($_POST["token"])) {
                    echo "Acceso restringido";
                    exit();
                }
    
                $id= filter_var($_POST["id"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $obj = new producto($id);
                $resultado = $obj->Bproducto();
                var_dump($resultado);
                
                if (count($resultado) > 0) {
                    header("location: index.php?c=".seg::codificar("producto")."&m=". seg::codificar("productos"). "&id=". $id."#catalogo");
                }else{
                    header("location: index.php?c=".seg::codificar("producto")."&m=". seg::codificar("productos")."#catalogo");
                }
            }
        }
    }




?>