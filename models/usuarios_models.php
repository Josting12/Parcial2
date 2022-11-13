<?php
    class usuario_informacion{
        private $correo;
        private $password;
        private $salt;
        private $nombre;

        public function __construct($correo, $password,$salt,$nombre){
            $this->correo = $correo;
            $this->password = $password;
            $this->salt = $salt;
            $this->nombre = $nombre;
        }

        public function valida_usuario(){
            #password = hash(password . salt)
            #salt = md5(random_bytes(20))
            $tabla[] = ["correo"=>"jramos@gmail.com", "password"=>"e39eca4332bc02427fd0c6a97dbe390eb074d2ee", "salt"=>"wu9b#2TdI3W*", "nombre"=>"Jramos"];
            $tabla[] = ["correo"=>"pgonzales@gmail.com", "password"=>"dff9f455ef313d7eeb754ac87375e067a7d3566d", "salt"=>"38E0D0e3j*Wt", "nombre"=>"Pgonzalez"];
            $tabla[] = ["correo"=>"usuario3@hotmail.com", "password"=>"c33d70128703b8d409aeb65c7e094e734afb2b24", "salt"=>"*Z9kC44Xp8%c", "nombre"=>"Usuario3"];
            foreach($tabla as $t)
            {
                $pass = sha1($this->password.$t["salt"]);
                if($this->correo == $t["correo"] && $pass == $t["password"])
                    return $t;
            }
            return [];
        }
        
    }
?>