<?php
    require_once("models/productos_models.php");
    class contenido_controllers{
        public static function contenido(){
            setcookie("compra","",time()-40);
            $title = "Zapatillas";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/contenido/index.php");
            require_once("views/template/footer.php");
        }

        public static function arreglo_productos(){
            $tabla[] = new productos_models(1,"NIKE REACT MAX 270","$110.99", 110.99, 1000,"https://thumbnails-photos.amazon.com/v1/thumbnail/4pszUFX4RLuavWvaEs_uZg?ownerId=A1MLNJWL2K3IL3&viewBox=675&groupShareToken=AJQhnVgXRnSTgjFKq8JBUA.mMe2DYF6b5AUp6dah8OXoE");
            $tabla[] = new productos_models(2,"ADIDAS NMDR 1","$129.99", 129.99, 1000,"https://thumbnails-photos.amazon.com/v1/thumbnail/yvRxYdwaTb2yhAdolWIt0A?ownerId=A1MLNJWL2K3IL3&viewBox=683&groupShareToken=1r7rPmrzTMWg25ERiMN8qQ.Dd0SPGXZFsdQm87z6SEjza");
            $tabla[] = new productos_models(3,"NIKE AIR FORCE 1","$144.99", 144.99, 1000,"https://thumbnails-photos.amazon.com/v1/thumbnail/xrrHuWVHT9O8Yn8hsp5oUA?ownerId=A1MLNJWL2K3IL3&viewBox=675&groupShareToken=CD45O111SxCW2vrUpNhm-A.8SoABtqeCVvxAyejuuLXQq");
            $tabla[] = new productos_models(4,"VANS PINK","$129.99", 129.99, 1000,"https://thumbnails-photos.amazon.com/v1/thumbnail/FYHg2S4-Qt-xFfmLnUsAww?ownerId=A1MLNJWL2K3IL3&viewBox=1103%2C675&groupShareToken=A3CzSKMmS_u5tKdsClq-1w.Zvwm2WTg0Qk36ZyvG_myim");
            $tabla[] = new productos_models(5,"BROKSS ADRENALINE GTS 1","$120.99", 120.99, 1000,"https://thumbnails-photos.amazon.com/v1/thumbnail/-cUxPnXEQzSpdZ7H_FSr6w?ownerId=A1MLNJWL2K3IL3&viewBox=1079%2C675&groupShareToken=ZkJs028AQzOzp43t0CKe3w.CTLtvDO3aPndBkn2ilnkY0");
            $tabla[] = new productos_models(6,"CONVERSE RUN STARS HIKE","$69.99", 69.99, 1000,"https://thumbnails-photos.amazon.com/v1/thumbnail/2MAb0trQSLKhRucHzKPCsA?ownerId=A1MLNJWL2K3IL3&viewBox=1023%2C683&groupShareToken=aEUZkbcVRn6fw4KAdbd8lg.hEeCYv6JNdHxcuN_arPbGc");
            return $tabla;
        }
        
    }
?>