<?php

    class Servicios {

        public static function selectServicios($con){

            $sql = "call sp_getServicios";

            try{

                $resultado = $con->query($sql);

            } catch (PDOException $e){

                $con->bdError($e);
                die();

            }

            if($resultado->rowCount() > 0){

                foreach($resultado as $registro){

                    echo "
                        <option value=\"$registro[id_servicio]\">
                            $registro[descripcion_servicio]
                        </option>";
                    

                }

            } else {

                echo "
                    <option value=\"\">
                        No hay opciones
                    </option>";

            }

        }

    }

?>