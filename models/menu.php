<?php

    class Menu extends Conectar{
        /* TODO: Listar Registros */
        public function get_menu_x_rol_id($rol_id){
            $conectar=parent::Conexion();
            $sql="SP_L_MENU_01 ?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$rol_id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert_menu_detalle_X_rol_id($rol_id){
            $conectar=parent::Conexion();
            $sql="SP_I_MENU_02 ?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$rol_id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function update_menu_habilitar($mend_id){
            $conectar=parent::Conexion();
            $sql="SP_U_MENU_01 ?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$mend_id);
            $query->execute();
        }

        public function update_menu_deshabilitar($mend_id){
            $conectar=parent::Conexion();
            $sql="SP_U_MENU_02 ?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$mend_id);
            $query->execute();
        }

    }
?>