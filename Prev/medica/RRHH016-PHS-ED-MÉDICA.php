<?php
    session_start();
    if($_SESSION['rol'] == 2){ 

        include "/Controllers/Conexion.php";
        include "/Controllers/Forms.php";
        
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
            <title>RRHH016-PHS-ED-MÉDICA</title>
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
                    <h1><b>EVALUACIÓN DE DESEMPEÑO DIRECCIÓN MÉDICA - PROFESIONALES ASISTENCIALES HORAS CONVENIDAS SEMANALES</b></h1>
                    <p>Datos del prestador:</p>
                </div>

                <div class="row">
                    <?php

                        $form->prestador($id, $con);

                    ?>
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
                    <div class="row">
                        <h3>3.	REGISTROS MÉDICOS / HISTORIAS CLÍNICAS: Realizar el llenado de la Historia clínica de cada paciente de forma adecuada y completa, y otros registros médicos: consentimientos informados, demás documentos de seguimientos de cada paciente, etc.; dando cumplimiento a la Ley 26.529.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p3']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>4.	CAPACIDAD DE INNOVACIÓN E INVESTIGACIÓN: Curiosidad, agilidad y capacidad de aprendizaje, y permeabilidad al cambio y al desarrollo tecnológico y en constante evolución. Capacidad para fomentar la investigación e innovación y adaptación a los cambios.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p4']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>5.	ORGANIZACIÓN: Habilidad para organizar las actividades y recursos, siguiendo un proceso ordenado en su ejecución, optimizando tiempos y maximizando la eficiencia y eficacia de la Institución. Administración del tiempo. </h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p5']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>6.	CALIDAD DE SERVICIO: Habilidad para asegurar que cada paciente reciba el conjunto de servicios diagnósticos y terapéuticos más adecuado para conseguir una atención sanitaria óptima, teniendo en cuenta todos los factores y los conocimientos del paciente y del servicio, en el marco de un proceso de mejora continua.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p6']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>7.	EMPATÍA Y TRATO CON EL PACIENTE: Conocimiento y aplicación de la Ley 26.529 de Derechos del Paciente en su Relación con los Profesionales e Instituciones de la Salud. Asimismo, la habilidad para sentir empatía por el paciente que es la comprensión de sus emociones, perspectivas y experiencias.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p7']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>8.	COMUNICACIÓN Y TRABAJO EN EQUIPO: La comunicación dentro del Servicio y su vinculación con los demás Servicios que intervienen en el Hospital hacen al logro de la mejor calidad de servicio para nuestros/as pacientes. El trabajo en equipo fortalece a cada integrante, que desarrolla su función en cada Servicio para cumplir con los objetivos y lineamientos del Hospital.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p8']; ?>
                        </p>
                    </div>
                </form>

            </div>
        </body>
        </html>
    <?php
    } else {
        header("Location: ../subpages/noAutorizado.html");
    }
?>