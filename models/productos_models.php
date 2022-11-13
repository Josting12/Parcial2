<?php
    class productos_models{
        private $id_producto;
        private $descripcion;
        private $costo_compra;
        private $precio_venta;
        private $cantidad_en_existencia;
        private $imagen;

        public function __construct($id_producto, $descripcion, $costo_compra, $precio_venta, $cantidad_en_existencia, $imagen){
            $this->id_producto = $id_producto;
            $this->descripcion = $descripcion;
            $this->costo_compra = $costo_compra;
            $this->precio_venta = $precio_venta;
            $this->cantidad_en_existencia = $cantidad_en_existencia;
            $this->imagen = $imagen;
        }

        public function setId_producto($id_producto){
            $this->id_producto = $id_producto;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function setCosto_compra($costo_compra){
            $this->costo_compra = $costo_compra;
        }

        public function setPrecio_venta($precio_venta){
            $this->precio_venta = $precio_venta;
        }

        public function setCantidad_en_existencia($cantidad_en_existencia){
            $this->cantidad_en_existencia = $cantidad_en_existencia;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
        }

        public function getId_producto(){
            return $this->id_producto;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getCosto_compra(){
            return $this->costo_compra;
        }

        public function getPrecio_venta(){
            return $this->precio_venta;
        }

        public function getCantidad_en_existencia(){
            return $this->cantidad_en_existencia;
        }

        public function getImagen(){
            return $this->imagen;
        }

        public function valida_productos(){
            $tabla[] = ["id_producto"=>1, "descripcion"=>"NIKE REACT 270", "costo_compra"=>"$110.99", "precio_venta"=>110.99, "cantidad_en_existencia"=>"1000", "imagen"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/4pszUFX4RLuavWvaEs_uZg?ownerId=A1MLNJWL2K3IL3&viewBox=675&groupShareToken=AJQhnVgXRnSTgjFKq8JBUA.mMe2DYF6b5AUp6dah8OXoE"];
            $tabla[] = ["id_producto"=>2, "descripcion"=>"ADIDAS NMDR", "costo_compra"=>"$129.99", "precio_venta"=>129.99, "cantidad_en_existencia"=>"1000", "imagen"=>"//i01.appmifile.com/webfile/globalimg/products/pc/redmi-note-11-pro-5g-global/p1.jpg"];
            $tabla[] = ["id_producto"=>3, "descripcion"=>"NIKE AIR FORCE 1", "costo_compra"=>"$144.99", "precio_venta"=>144.99, "cantidad_en_existencia"=>"1000", "imagen"=>"//i01.appmifile.com/webfile/globalimg/products/pc/poco-f4-gt/section01.jpg"];
            $tabla[] = ["id_producto"=>4, "descripcion"=>"VANS PINK", "costo_compra"=>"$129.99", "precio_venta"=>129.99, "cantidad_en_existencia"=>"1000", "imagen"=>"//i01.appmifile.com/webfile/globalimg/products/pc/mi11/img-header.jpg"];
            $tabla[] = ["id_producto"=>5, "descripcion"=>"BROKSS ADRENALINE GTS 1", "costo_compra"=>"$120.99", "precio_venta"=>120.99, "cantidad_en_existencia"=>"1000", "imagen"=>"https://i02.appmifile.com/mi-com-product/fly-birds/xiaomi-12t/pc/img01l.jpg"];
            $tabla[] = ["id_producto"=>6, "descripcion"=>"CONVERSE RUN START HIKE", "costo_compra"=>"$69.99", "precio_venta"=>69.99, "cantidad_en_existencia"=>"1000", "imagen"=>"https://i02.appmifile.com/489_operator_sg/02/11/2021/93c0a9f30ae6c735f9399fae540cb902.jpg"];
            foreach($tabla as $t)
            {
                if($this->id_producto == $t["id_producto"])
                    return $t;
            }
            return [];
        
        }

    }
?>