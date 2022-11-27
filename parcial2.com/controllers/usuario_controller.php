<?php
require_once("models/usuario.php");
        class usuario_controller{
            public static function login(){

                $msg = isset($_GET["msg"])?$_GET["msg"]:"";
                $titulo = "Login Usuario";
                require_once("views/templates/header.php");
                require_once("views/templates/navbar.php");
                require_once("views/usuario/login.php");
                require_once("views/templates/footer.php");
                


            }

            public static function validar(){
                if( !isset($_POST["token"]) || seg::validaSesion($_POST["token"])){
                  
                
                }
                $obj = new usuario($_POST["txtusuario"],$_POST["txtpassword"],"","");
                $resultado = $obj ->valida_usuario();
                if (count($resultado)>0){
                    $_SESSION["usuario"]= $resultado["usuario"];
                    $_SESSION["nombre"] = $resultado["nombre"];
                    if (isset($_POST["chkrecord"])){
                        setcookie("usuario", $resultado["usuario"], time()+60);
                        setcookie("nombre", $resultado["nombre"], time()+60);

                    }
                    header("location:index.php?c=" . seg::codificar("producto") . "&m=" . seg::codificar("productos"));

                } else
                  header("location:index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("login")."&msg= Usuario o password incorrectos");

            }
            public static function cerrarSesion(){
                session_destroy();
                header("location:index.php");


            }

        }











?>