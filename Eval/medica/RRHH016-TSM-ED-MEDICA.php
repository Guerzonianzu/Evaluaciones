<?php
    session_start();
    if($_SESSION['rol'] == 2){ 
        $id = $_GET['id'];
        include "../../Controllers/Conexion.php";
        include "../../Controllers/Forms.php";

        $con = Conexion::conectar();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>RRHH016-TSM-ED-MÉDICA</title>
            <link rel="stylesheet" href="/Style/estilo.css">
        </head>
        <body>
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="/Img/hcank.png" width="70px" heigth="50px" alt="inicio"></a>
                <div class="justify-content-end">                        
                    <?php
                        echo "$_SESSION[apellido] $_SESSION[nombre]";
                    ?>
                    <a href="/App/logout.php" class="btn btn-primary">Cerrar Sesion</a>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <h1><b>EVALUACIÓN DE DESEMPEÑO DIRECCIÓN MÉDICA - TÉCNICAS/OS ASISTENCIALES CON HORAS CONVENIDAS SEMANALES.</b></h1>
                    <p>Datos del prestador:</p>
                </div>

                <div class="row">
                    <?php

                        if(isset($_POST['op']) && isset($_POST['op2']) && isset($_POST['op3']) && isset($_POST['op4']) && isset($_POST['op5']) && isset($_POST['op6']) && isset($_POST['op7']) && isset($_POST['op8'])){

                            $form = new Forms();
                            
                            $form->registrarEvaluacion($con);

                        }

                        Forms::prestador($id, $con);

                    ?>
                </div>

                <form method="POST">
                    <div class="row">
                        <h3>1.	FORMACIÓN TÉCNICA ESPECÍFICA EN EL SERVICIO: Es la que aborda los saberes técnicos específicos propios de cada campo, así como también la contextualización de los contenidos desarrollados en la formación científico-tecnológica de acuerdo a la función a desempeñar y al Servicio del que forma parte.</h3>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op' value="40" required><label for="" style="margin-left:40px"><b>Excelente</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op' value="32" required><label for="" style="margin-left:40px"><b>Muy Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op' value="24" required><label for="" style="margin-left:40px"><b>Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op' value="16" required><label for="" style="margin-left:40px"><b>Regular</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op' value="8" required><label for="" style="margin-left:40px"><b>Deficiente</b></label>
                    </div>
                    <div class="row";>
                        <h3>2.	PRODUCTIVIDAD: Capacidad de generar resultados con la calidad esperada y en el tiempo oportuno, a fin de lograr los objetivos y metas propuestas.</h3>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="15" required><label for="" style="margin-left:40px"><b>Excelente</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="12" required><label for="" style="margin-left:40px"><b>Muy Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="9" required><label for="" style="margin-left:40px"><b>Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="6" required><label for="" style="margin-left:40px"><b>Regular</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="3" required><label for="" style="margin-left:40px"><b>Deficiente</b></label>
                    </div>
                    <div class="row";>
                        <h3>3.	ORGANIZACIÓN: Habilidad para organizar las actividades y recursos, siguiendo un proceso ordenado en su ejecución, optimizando tiempos y maximizando la eficiencia y eficacia de la Institución. Administración del tiempo. </h3>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op3' value="10" required><label for="" style="margin-left:40px"><b>Excelente</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op3' value="8" required><label for="" style="margin-left:40px"><b>Muy Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op3' value="6" required><label for="" style="margin-left:40px"><b>Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op3' value="4" required><label for="" style="margin-left:40px"><b>Regular</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op3' value="2" required><label for="" style="margin-left:40px"><b>Deficiente</b></label>
                    </div>
                    <div class="row">
                        <h3>4.	CALIDAD DE SERVICIO: Habilidad para asegurar que cada paciente reciba el conjunto de servicios diagnósticos y terapéuticos más adecuado para conseguir una atención sanitaria óptima, teniendo en cuenta todos los factores y los conocimientos del paciente y del servicio, en el marco de un proceso de mejora continua.</h3>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op4' value="10" required><label for="" style="margin-left:40px"><b>Excelente</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op4' value="8" required><label for="" style="margin-left:40px"><b>Muy Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op4' value="6" required><label for="" style="margin-left:40px"><b>Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op4' value="4" required><label for="" style="margin-left:40px"><b>Regular</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op4' value="2" required><label for="" style="margin-left:40px"><b>Deficiente</b></label>
                    </div>
                    <div class="row">
                        <h3>5.	EMPATÍA Y TRATO CON EL PACIENTE: Conocimiento y aplicación de la Ley 26.529 de Derechos del Paciente en su Relación con los Profesionales e Instituciones de la Salud. Habilidad para sentir empatía por el paciente que es la comprensión de sus emociones, perspectivas y experiencias, así como el manejo confidencial de la información.</h3>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="15" required><label for="" style="margin-left:40px"><b>Excelente</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="12" required><label for="" style="margin-left:40px"><b>Muy Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="9" required><label for="" style="margin-left:40px"><b>Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="6" required><label for="" style="margin-left:40px"><b>Regular</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="3" required><label for="" style="margin-left:40px"><b>Deficiente</b></label>
                    </div>
                    <div class="row">
                        <h3>6.	COMUNICACIÓN Y TRABAJO EN EQUIPO: La comunicación dentro del Servicio y su vinculación con los demás Servicios que intervienen en el Hospital hacen al logro de la mejor calidad de servicio para nuestros/as pacientes. Así como el trabajo en equipo fortalece a cada integrante desarrollando su función en cada Servicio de para cumplir con los objetivos cada une y en conjuntos del Hospital.</h3>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op6' value="10" required><label for="" style="margin-left:40px"><b>Excelente</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op6' value="8" required><label for="" style="margin-left:40px"><b>Muy Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op6' value="6" required><label for="" style="margin-left:40px"><b>Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op6' value="4" required><label for="" style="margin-left:40px"><b>Regular</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op6' value="2" required><label for="" style="margin-left:40px"><b>Deficiente</b></label>
                    </div>
                    <input type="hidden" name="op7" value="0">
                    <input type="hidden" name="op8" value="0">
                    <input type="hidden" name="id" value="<?php echo "$id"; ?>">
                    <input type="submit" value="Enviar">
                </form>
                
            </div>
        </body>
        </html>
    <?php
    } else {
        header("Location: ../subpages/noAutorizado.html");
    }
?>