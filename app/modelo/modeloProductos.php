<?php
    require_once 'modelo.php';
    class ModeloProductos extends Modelo{
        protected $db;


        public function obtenerProductos(){
            $query=$this->db->prepare("SELECT * FROM productos");
            $query->execute();
            $proveedores=$query->fetchAll(PDO::FETCH_OBJ);
            return $proveedores;
        }
        //obtengo los productos por ID
        public function obtenerProductosId($id){
            $query=$this->db->prepare("SELECT * FROM productos JOIN proveedores ON productos.proveedor_id=proveedores.id_proveedor WHERE proveedor_id=?");
            $query->execute([$id]);
            $productos=$query->fetchAll(PDO::FETCH_OBJ);
            return $productos;
        }

    }
?>