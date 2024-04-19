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
            <title>RRHH016-A-ED-DOCENCIA</title>
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
                    <h1><b>EVALUACIÓN DE DESEMPEÑO DIRECCIÓN DE DOCENCIA, ÉTICA APLICADA E INVESTIGACIÓN - AUXILIARES ADMINISTRATIVOS/AS</b></h1>
                    <p>Datos del prestador:</p>
                </div>

                <div class="row">
                    <?php

                        $form->prestador($id, $con);

                    ?>
                </div>

                <form method="POST">
                    <div class="row">
                        <h3>1.	PRODUCTIVIDAD: Capacidad de promover producción científica/clínica que redunde en mejorar la calidad de la atención al paciente. Habilidad para resolver los problemas planteados en su Servicio en tiempo y forma, realizando las tareas asignada.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p1']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>2.	RECIBIR Y ATENDER INSTRUCCIONES: Capacidad para comprender, así como cumplir con atención y disciplina las instrucciones de trabajo, colaborando en todo lo posible o visualización de posibilidades de mejora.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p2']; ?>
                        </p>
                    </div>
                    <div class="row";>
                        <h3>3.	SEGUIMIENTO DE PROCESO: : Compromiso individual respecto del cumplimiento de las diversas normas y procedimientos establecidos, para el desempeño institucional de cada trabajadora y trabajador dentro de cada área del Hospital, y que asegura la mejor calidad de atención, la cual agrega valor organizacional.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p3']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>4.	ORGANIZACIÓN DEL ESPACIO DE TRABAJO: Habilidad para organizar el espacio de trabajo eficazmente y de acuerdo a los lineamientos institucionales, manteniendo orden y la limpieza. Transformación agradable del espacio físico para que sea un sitio agradable y actué como elemento motivacional.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p4']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>5.	TRABAJO EN EQUIPO: El trabajo en equipo fortalece a cada integrante, desarrollando su función correctamente para el cumplimiento de los objetivos de su Servicio y del Hospital.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p5']; ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>6.	EMPATÍA Y COMPROMISO CON LA INSTITUCIÓN: Comprende la misión y valores del Hospital, así como el rol social y la trascendencia que cumple el Hospital en la comunidad. Se muestra motivado y empático con el público y las personas con las que se vincula dentro de la Institución.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php echo $values['p6']; ?>
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