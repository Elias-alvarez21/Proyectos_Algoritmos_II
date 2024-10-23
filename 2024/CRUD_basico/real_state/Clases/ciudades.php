<?php 
class Ciudades{
    public static function TraerCiudades()
    {
            $con=Conexion::Connect();
            $sql=$con->query("SELECT * FROM ciudades");
            $propiedades=$sql->fetchAll();
            return $propiedades;
    }

}
?>