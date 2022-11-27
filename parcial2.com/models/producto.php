<?php
     
     
     class producto {

        private $id_producto;
        private $descripcion;
        private $costo_compra;
        private $precio_venta;
        private $cantidad_existencia;

        public function __construct($id_producto)
        {
            $this -> id_producto= $id_producto;
           
            
        }
        public function setId ($id_producto){
            $this-> id_producto = $id_producto;

        }

        public function getId(){
            return $this ->id_producto;
        }

        public function getdes(){
            return $this ->descripcion;
        }
        public function getcostoCompra(){
            return $this ->costo_compra;
        }
        public function pventa(){
            return $this ->precio_venta;
        }
        public function Cexis(){
            return $this ->cantidad_existencia;
        }
        
        public function articulos(){
            
            $articulos[]= ["id_producto"=>"1","descripcion"=>"Teckel","costo_compra"=>"$400","precio_venta"=>"900","cantidad_existencia"=>"4"];
            $articulos[]= ["id_producto"=>"2","descripcion"=>"Pastor Aleman","costo_compra"=>"$250","precio_venta"=>"900","cantidad_existencia"=>"6"];
            $articulos[]= ["id_producto"=>"3","descripcion"=>"Cockie spaniel","costo_compra"=>"$600","precio_venta"=>"900","cantidad_existencia"=>"3"];
            $articulos[]= ["id_producto"=>"4","descripcion"=>"Labrador","costo_compra"=>"$150","precio_venta"=>"900","cantidad_existencia"=>"2"];
            

    }

    public static function Mproducto(){

        $articulos[]= ["id_producto"=>"1","descripcion"=>"Teckel","costo_compra"=>"$400","precio_venta"=>"900","cantidad_existencia"=>"4"];
        $articulos[]= ["id_producto"=>"2","descripcion"=>"Pastor Aleman","costo_compra"=>"$250","precio_venta"=>"900","cantidad_existencia"=>"6"];
        $articulos[]= ["id_producto"=>"3","descripcion"=>"Cockie spaniel","costo_compra"=>"$600","precio_venta"=>"900","cantidad_existencia"=>"3"];
        $articulos[]= ["id_producto"=>"4","descripcion"=>"Labrador","costo_compra"=>"$150","precio_venta"=>"900","cantidad_existencia"=>"2"];
           
         
            return $articulos;

    }
    

    
    public  function Bproducto(){

        $articulos[]= ["id_producto"=>"1","descripcion"=>"Teckel","costo_compra"=>"$400","precio_venta"=>"900","cantidad_existencia"=>"4"];
        $articulos[]= ["id_producto"=>"2","descripcion"=>"Pastor Aleman","costo_compra"=>"$250","precio_venta"=>"900","cantidad_existencia"=>"6"];
        $articulos[]= ["id_producto"=>"3","descripcion"=>"Cockie spaniel","costo_compra"=>"$600","precio_venta"=>"900","cantidad_existencia"=>"3"];
        $articulos[]= ["id_producto"=>"4","descripcion"=>"Labrador","costo_compra"=>"$150","precio_venta"=>"900","cantidad_existencia"=>"2"];
        

        foreach ($articulos as $t)
                {
                    if($this ->id_producto == $t["id_producto"] )
                    return $t;
                    
                }
                return[];
    }
 }
