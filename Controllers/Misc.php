<?php

    class Misc {

        public static function mostrar(){

            if(isset($_GET['ok']) && $_GET['ok'] == 1){

                echo "
                    <div class=\"alert alert-success\" role=\"alert\">
                        <p>Usuario creado correctamente</p>
                    </div>";

            } elseif (isset($_GET['ok']) && $_GET['ok'] == 2) {

                echo "
                    <div class=\"alert alert-success\" role=\"alert\">
                        <p>Usuario modificado correctamente</p>
                    </div>";
                
            }

        }

        public static function bdError($e){

            echo "
                <div class=\"alert alert-danger\">
                    <p>Fallo la conexion con el servidor: ". $e->getMessage(). ".</p>
                </div>"; 

        }

    }

?>