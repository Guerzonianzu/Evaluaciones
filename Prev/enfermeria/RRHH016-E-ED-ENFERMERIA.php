<?php
    session_start();
    if($_SESSION['rol'] == 2 || $_SESSION['rol'] == 1){ 

        include "../../Controllers/Conexion.php";
        include "../../Controllers/Forms.php";
        
        $id = $_GET['id'];
        $con = Conexion::conectar();
        $form = new Forms;
        $values = $form->showCalificaciones($id, $con);

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>RRHH016-E-ED-ENFERMERIA</title>
            <link rel="stylesheet" href="../../Style/estilo.css">
        </head>
        <body>
        
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="../../App/home.php"><img src="../../Img/hcank.png" width="70px" heigth="50px" alt="inicio"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
                <div class="justify-content-end">                        
                    <?php
                        echo "$_SESSION[apellido] $_SESSION[nombre]";
                    ?>
                    <a href="../../App/logout.php" class="btn btn-primary">Cerrar Sesion</a>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <h1><b>EVALUACIÓN DE DESEMPEÑO DIRECCIÓN ENFERMERÍA - LICENCIADOS/AS EN ENFERMERÍA / ENFERMEROS/AS PROFESIONALES.</b></h1>
                </div>

                <div class="row">

                    <div class="col">

                        <p>Datos del trabajador/a:</p>

                        <?php

                            $form->prestador($id, $con);

                        ?>

                    </div>

                    <div class="col">

                        <p>Datos del evaluador/a:</p>

                        <?php

                            $form->evaluador($id, $con);

                        ?>

                    </div>
                    
                </div>

                <form method="POST">
                    <div class="row">
                        <h3>1.	FORMACIÓN TÉCNICA ESPECÍFICA EN EL SERVICIO: Es la que aborda los saberes técnicos específicos propios de cada campo, así como también la contextualización de los contenidos desarrollados en la formación científico-tecnológica de acuerdo a la función a desempeñar y al Servicio del que forma parte.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p1']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>2.	RESPONSABILIDAD: Cualidad que tiene la persona de cumplir con exactitud y seriedad sus funciones y compromisos laborales, demuestra esfuerzo, dedicación y preocupación por el trabajo. Cumple su asistencia completa y horario convenido.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p2']; ?>
                        </p>
                    </div>
                    <div class="row";>
                        <h3>3.	ORGANIZACIÓN EN LA GUARDIA / ADMINISTRACIÓN DE LOS RECURSOS Y MATERIALES: Habilidad para organizar la atención de las/los pacientes, actividades, materiales y recursos disponibles. Organización de la atención las/los pacientes, administración de recursos y suministro de medicación.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p3']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>4.	CALIDAD DE SERVICIO / PRESTAR ATENCIÓN AL PACIENTE: Habilidad para asegurar que cada paciente asignado/a sea atendido de acuerdo a su diagnóstico y tratamiento más adecuado para conseguir una atención sanitaria óptima, procurando brindarle los cuidados necesarios para garantizarle su mejoría y que su riesgo vida sea disipado, teniendo en cuenta la complejidad, en el marco de un proceso de mejora continua.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p4']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>5.	SEGUIMIENTO DE ADECUADO DE PROTOCOLOS: Habilidad para aplicar los procedimientos del servicio y seguir correctamente los canales orgánicos del Hospital. Adicionalmente aporta ideas tendientes a la mejora continua de dichos procesos.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p5']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>6.	EMPATÍA Y TRATO CON EL PACIENTE: Conocimiento y aplicación de la Ley 26.529 de Derechos del Paciente en su Relación con los Profesionales e Instituciones de la Salud. Asimismo, la habilidad para sentir empatía por el paciente que es la comprensión de sus emociones, perspectivas y experiencias.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p6']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>7.	COMUNICACIÓN Y TRABAJO EN EQUIPO: La comunicación dentro del Servicio y su vinculación con los demás Servicios que intervienen en una misma Guardia del Hospital hacen al logro de la mejor calidad de servicio para los pacientes que ingresan a la guardia. Así como el trabajo en equipo fortalece a cada integrante desarrollando su función en cada Servicio de para cumplir con los objetivos cada une y conjuntos del Hospital.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p7']; ?>
                        </p>
                    </div>
                </form>

                <?php

                    if($_SESSION['rol'] == 1){

                        echo "<p><b>Resultado:</b></p>";
                        Forms::ponderacion($values['total']);

                        echo "
                            <div class=\"row mt-5\">
                                <div class=\"col\">
                                    <p>----------------------</p>
                                    <br>
                                    <p>Firma del evaluador/a</p>
                                </div>
                                <div class=\"col\">
                                    <p>----------------------</p>
                                    <br>
                                            <p>Aclaración</p>
                                </div>
                                <div class=\"col\">
                                    <p>----------------------</p>
                                    <br>        
                                                <p>DNI</p>
                                </div>
                            </div>";

                            echo "
                            <div class=\"row mt-5\">
                                <div class=\"col\">
                                    <p>----------------------</p>
                                    <br>
                                    <p>Firma del evaluado/a</p>
                                </div>
                                <div class=\"col\">
                                    <p>----------------------</p>
                                    <br>
                                            <p>Aclaración</p>
                                </div>
                                <div class=\"col\">
                                    <p>----------------------</p>
                                    <br>        
                                                <p>DNI</p>
                                </div>
                            </div>";
                        

                    }

                ?>
                
            </div>
        </body>
        </html>
    <?php
    } else {
        header("Location: ../subpages/noAutorizado.html");
    }
?>