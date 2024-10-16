<?php
    require_once 'modelo.php';
    class ModeloProductos extends Modelo{
        protected $db;

        //obtengo los productos por ID
        public function obtenerProductosId($id){
            $query=$this->db->prepare("SELECT * FROM productos JOIN proveedores ON productos.proveedor_id=proveedores.id_proveedor WHERE proveedor_id=?");
            $query->execute([$id]);
            $productos=$query->fetchAll(PDO::FETCH_OBJ);
            return $productos;
        }

    }
?>