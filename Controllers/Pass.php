<?php

    class Pass{

        public function restart($id, $con){

            $sql = "update usuarios set contra = '123456', flag = 1 where id_usuario = $id;";

            try{

                $resultado = $con->exec($sql);

            } catch (PDOException $e){

                $con->bdError();
                die();

            }

            if ($resultado != false){

                header("Location: /App/users.php?ok=4");

            }

        }

    }

?>