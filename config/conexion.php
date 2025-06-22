<?php
    session_start();
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                //$conectar = $this->dbh=new PDO("sqlsrv:Server=ELIEZER;Database=CompraVenta","sa","12345678");
                $conectar = $this->dbh=new PDO("sqlsrv:server = tcp:eliezercode.database.windows.net,1433; Database = eliezercode", "eliezercode", "Tobby2703@");
                return $conectar;
            }catch(Exception $e){
                print "Error Conexion BD". $e->getMessage()."<br/>";
                die();
            }
        }

        public static function ruta(){
            /*TODO: Ruta de acceso del Proyecto (Validar su puerto y nombre de carpeta por el suyo)*/
            //return "http://localhost:90/PERSONAL_CompraVenta/";
            return "https://compraventa-a9b5bheeftbbdza3.centralus-01.azurewebsites.net/";
        }
        
    }
?>