<?php

    include "Conexion.php";

    class Auth{

        public static function login($user, $pass){

            $con = Conexion::conectar();

            define("SQL", "call sp_login($user, $pass);");

            try{

                //Consulta a base de datos.
                $resultado = $con->query(SQL);

                if($resultado->rowCount() > 0){
                    
                    foreach($resultado as $registro){

                        //Creacion de variables de sesion.
                        session_start();
                        $_SESSION['user'] = $registro['id_usuario'];
                        $_SESSION['trabajador'] = $registro['trabajador'];
                        $_SESSION['nombre'] = $registro['nombre'];
                        $_SESSION['apellido'] = $registro['apellido'];
                        $_SESSION['rol'] = $registro['rol'];
                        $_SESSION['flag'] = $registro['flag'];
                        header("Location: App/home.php");
                    }
                
                } else {

                    echo 
                        "<div class=\"alert alert-danger mt-3\" role=\"alert\">
                            <p>El nombre de usuario o contraseña es incorrecto</p>
                        </div>";

                }
                
            } catch (PDOException $e){

                $con->bdError($e);

            }

        }

    }

?>