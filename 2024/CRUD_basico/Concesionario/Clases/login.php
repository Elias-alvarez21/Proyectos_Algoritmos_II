<?php
require_once "conexion.php";
class Login {
    // private int $id;
    // private string $nombre;
    private string $correo;
    private string $contra;

    public function __construct($correo,$contra)
     {
         $this->correo = $correo;
         $this->contra = $contra;
     }

     public static function login($correo, $contraseña) {
        $usuario = array();//No es necesario declararlo porque se declara con el TIPADO FLEXIBLE
        try {
            $conexion = Conexion::Connect();
            $sth = $conexion->prepare("SELECT id FROM usuarios WHERE email = '$correo' AND password = '$contraseña' LIMIT 1");
            // $sth->bindParam(':correo', $correo);
            // $sth->bindParam(':contraseña', $contraseña);
            $sth->execute();
            $usuario = $sth->fetchAll(PDO::FETCH_OBJ); // Usar PDO::FETCH_OBJ para obtener objetos
            
            if (isset($usuario[0]->id)) {
                $_SESSION["validado"] = true;
                return true;
            } else {
                return null;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    
    public static function chequeo(){
        if(!isset($_SESSION["validado"])){
            header("Location: index.php");
        }
    }
}
?>