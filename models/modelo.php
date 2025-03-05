<?php
    class Productos{
        
        private $producto;
        private $db;

        public function __construct(){
            $this->producto = array();
            //Modificar cadena de conexión cambiando usuario y contraseña, en caso de no ser por defecto
            $this->db = new PDO('mysql:host=localhost;dbname=tienda', "root", "");
        }

        private function setNames(){
            return $this->db->query("SET NAMES 'utf8'");
        }

        public function getProductos(){
            self::setNames();
            $sql = "SELECT id, Nombre, Precio FROM producto";
            foreach ($this->db->query($sql) as $res) {
                $this->producto[] = $res;
            }
        return $this->producto;
        }

        public function setProducto($nombre, $precio){
            self::setNames();
            $sql = "INSERT INTO producto(nombre, precio) VALUES ('" . $nombre . "', '" . $precio . "')";
            $result = $this->db->query($sql);

            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }
?>