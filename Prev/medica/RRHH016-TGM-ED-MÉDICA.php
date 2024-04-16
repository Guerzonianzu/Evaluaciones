<?php
    session_start();
    if($_SESSION['rol'] == 2){ 
        $id = $_GET['id'];
        require '../../conexion.php';
        $c = conectar();
        $sql = "select * from evaluaciones where evaluado = $id";
        $resultado = mysqli_query($c, $sql);
        while($registro = mysqli_fetch_assoc($resultado)){
            $p1 = $registro['pregunta1'];
            $p2 = $registro['pregunta2'];
            $p3 = $registro['pregunta3'];
            $p4 = $registro['pregunta4'];
            $p5 = $registro['pregunta5'];
            $p6 = $registro['pregunta6'];
            $p7 = $registro['pregunta7'];
            $p8 = $registro['pregunta8'];
        }
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>RRHH016-TGM-ED-MÉDICA</title>
            <link rel="stylesheet" href="../../style/estilo.css">
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="../../subpages/main.php"><img src="../img/hcank.png" width="70px" heigth="50px" alt="inicio"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../../subpages/main.php">Inicio<span class="sr-only">(current)</span></a>
                        </li>               
                    </ul>
                </div>
                <div class="justify-content-end">
                    <?php
                        echo "$_SESSION[apellido] $_SESSION[nombre]";
                    ?>
                    <a href="salida.php"><button class="btn btn-primary">Cerrar sesion</button></a>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <h1><b>EVALUACIÓN DE DESEMPEÑO DIRECCIÓN MÉDICA - TÉCNICAS/OS ASISTENCIALES DE GUARDIA.</b></h1>
                    <p>Datos del prestador:</p>
                    <?php
                        $sql = "select * from trabajadores where id_trabajador = $id";
                        $resultado = mysqli_query($c, $sql);
                        if(mysqli_affected_rows($c) > 0){
                            while($registro = mysqli_fetch_assoc($resultado)){ ?>
                                <div class="col" style="margin-top: 10px"><p><b>Nombre: <?php echo "$registro[nombre]"; ?></b></p></div>
                                <div class="col" style="margin-top: 10px"><p><b>Apellido: <?php echo "$registro[apellido]"; ?></b></p></div>
                                <div class="col" style="margin-top: 10px"><p><b>DNI: <?php echo "$registro[DNI]"; ?></b></p></div>
                            <?php
                            }
                        }
                    ?>
                </div>
                <form method="POST" action="../envios.php">
                    <div class="row">
                        <h3>1.	FORMACIÓN TÉCNICA ESPECÍFICA EN EL SERVICIO: Es la que aborda los saberes técnicos específicos propios de cada campo, así como también la contextualización de los contenidos desarrollados en la formación científico-tecnológica de acuerdo a la función a desempeñar y al Servicio del que forma parte.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php 
                                switch($p1){
                                    
                                    case 40:
                                        echo "Excelente.";
                                        break;

                                    case 32:
                                        echo "Muy bueno.";
                                        break;

                                    case 24:
                                        echo "Bueno.";
                                        break;

                                    case 16:
                                        echo "Regular.";
                                        break;

                                    case 8:
                                        echo "Deficiente.";
                                        break;
                                }
                            ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>2.	RESPONSABILIDAD: Cualidad que tiene la persona de cumplir con exactitud y seriedad sus funciones y compromisos laborales, demuestra esfuerzo, dedicación y preocupación por el trabajo. Cumple su asistencia completa y horario convenido.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php 
                                switch($p2){
                                    
                                    case 10:
                                        echo "Excelente.";
                                        break;

                                    case 8:
                                        echo "Muy bueno.";
                                        break;

                                    case 6:
                                        echo "Bueno.";
                                        break;

                                    case 4:
                                        echo "Regular.";
                                        break;

                                    case 2:
                                        echo "Deficiente.";
                                        break;
                                }
                            ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>3.	PRODUCTIVIDAD: Capacidad de generar resultados con la calidad esperada y en el tiempo oportuno, a fin de lograr los objetivos y metas propuestas.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php 
                                switch($p3){
                                    
                                    case 10:
                                        echo "Excelente.";
                                        break;

                                    case 8:
                                        echo "Muy bueno.";
                                        break;

                                    case 6:
                                        echo "Bueno.";
                                        break;

                                    case 4:
                                        echo "Regular.";
                                        break;

                                    case 2:
                                        echo "Deficiente.";
                                        break;
                                }
                            ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>4.	ORGANIZACIÓN EN LA GUARDIA: Habilidad para organizar las actividades y recursos, siguiendo un proceso ordenado en su ejecución. Organización dentro del equipo de guardia la atención de los pacientes que ingresan en la guardia y de las intervenciones que se presentan en ella.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php 
                                switch($p4){
                                    
                                    case 10:
                                        echo "Excelente.";
                                        break;

                                    case 8:
                                        echo "Muy bueno.";
                                        break;

                                    case 6:
                                        echo "Bueno.";
                                        break;

                                    case 4:
                                        echo "Regular.";
                                        break;

                                    case 2:
                                        echo "Deficiente.";
                                        break;
                                }
                            ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>5.	CALIDAD DE SERVICIO: Habilidad para asegurar que cada paciente reciba el conjunto de servicios diagnósticos y terapéuticos más adecuado para conseguir una atención sanitaria óptima, teniendo en cuenta todos los factores y los conocimientos del paciente y del servicio, en el marco de un proceso de mejora continua.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php 
                                switch($p5){
                                    
                                    case 10:
                                        echo "Excelente.";
                                        break;

                                    case 8:
                                        echo "Muy bueno.";
                                        break;

                                    case 6:
                                        echo "Bueno.";
                                        break;

                                    case 4:
                                        echo "Regular.";
                                        break;

                                    case 2:
                                        echo "Deficiente.";
                                        break;
                                }
                            ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>6.	EMPATÍA Y TRATO CON EL PACIENTE: Conocimiento y aplicación de la Ley 26.529 de Derechos del Paciente en su Relación con los Profesionales e Instituciones de la Salud. Asimismo, la habilidad para sentir empatía por el paciente que es la comprensión de sus emociones, perspectivas y experiencias.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php 
                                switch($p6){
                                    
                                    case 10:
                                        echo "Excelente.";
                                        break;

                                    case 8:
                                        echo "Muy bueno.";
                                        break;

                                    case 6:
                                        echo "Bueno.";
                                        break;

                                    case 4:
                                        echo "Regular.";
                                        break;

                                    case 2:
                                        echo "Deficiente.";
                                        break;
                                }
                            ?>
                        </p>
                    </div>
                    <div class="row">
                        <h3>7.	COMUNICACIÓN Y TRABAJO EN EQUIPO: La comunicación dentro del Servicio y su vinculación con los demás Servicios que intervienen en una misma Guardia del Hospital hacen al logro de la mejor calidad de servicio para los pacientes que ingresan a la guardia. Así como el trabajo en equipo fortalece a cada integrante desarrollando su función en cada Servicio de para cumplir con los objetivos cada une y conjuntos del Hospital.</h3>
                    </div>
                    <div class="row">
                        <p>
                            <b>CALIFICACION:</b>
                            <?php 
                                switch($p7){
                                    
                                    case 10:
                                        echo "Excelente.";
                                        break;

                                    case 8:
                                        echo "Muy bueno.";
                                        break;

                                    case 6:
                                        echo "Bueno.";
                                        break;

                                    case 4:
                                        echo "Regular.";
                                        break;

                                    case 2:
                                        echo "Deficiente.";
                                        break;
                                }
                            ?>
                        </p>
                    </div>
                </form>
                <?php
                    mysqli_close($c);
                ?>
            </div>
        </body>
        </html>
    <?php
    } else {
        header("Location: ../subpages/noAutorizado.html");
    }
?>