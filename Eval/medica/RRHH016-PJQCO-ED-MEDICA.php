<?php
    session_start();
    if($_SESSION['rol'] == 2){ 
        $id = $_GET['id'];
        require '../../conexion.php';
        $c = conectar();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>RRHH016-PJQCO-ED-MÉDICA</title>
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
                    <h1><b>EVALUACIÓN DE DESEMPEÑO DIRECCIÓN DE MÉDICA - PERSONAL JERÁRQUICO.</b></h1>
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
                        <h3>2.	CAPACIDAD DE INNOVACIÓN E INVESTIGACIÓN: Curiosidad, agilidad y capacidad de aprendizaje, permeabilidad al cambio y desarrollo tecnológico, en constante evolución. Capacidad para fomentar la investigación y nuevos proyectos, así como la innovación y adaptación a los cambios.</h3>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="10" required><label for="" style="margin-left:40px"><b>Excelente</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="8" required><label for="" style="margin-left:40px"><b>Muy Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="6" required><label for="" style="margin-left:40px"><b>Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="4" required><label for="" style="margin-left:40px"><b>Regular</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op2' value="2" required><label for="" style="margin-left:40px"><b>Deficiente</b></label>
                    </div>
                    <div class="row";>
                        <h3>3.	PLANIFICACIÓN: Habilidad para planificar de manera estratégica las actividades, personal y recursos materiales, siguiendo un proceso ordenado en su ejecución, optimizando tiempos y maximizando la eficiencia y eficacia de la Institución.</h3>
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
                        <h3>4.	LIDERAZGO: Habilidad para influir en el personal, dar instrucciones y conducir exitosamente las actividades del grupo, hacia el logro de los objetivos fijados.</h3>
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
                        <h3>5.	ORIENTACIÓN AL LOGRO DE LOS OBJETIVOS: Es la habilidad para coordinar los diferentes recursos humanos y materiales asignados a su Servicio para alcanzar los resultados de rendimiento previamente establecidos en función de la actividad individual y colectiva.</h3>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="10" required><label for="" style="margin-left:40px"><b>Excelente</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="8" required><label for="" style="margin-left:40px"><b>Muy Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="6" required><label for="" style="margin-left:40px"><b>Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="4" required><label for="" style="margin-left:40px"><b>Regular</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op5' value="2" required><label for="" style="margin-left:40px"><b>Deficiente</b></label>
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
                    <div class="row">
                        <h3>7.	EMPATÍA Y TRATO CON EL PACIENTE: Conocimiento y aplicación de la Ley 26.529 de Derechos del Paciente en su Relación con los Profesionales e Instituciones de la Salud. Asimismo, la habilidad para sentir empatía por el paciente que es la comprensión de sus emociones, perspectivas y experiencias.</h3>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op7' value="10" required><label for="" style="margin-left:40px"><b>Excelente</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op7' value="8" required><label for="" style="margin-left:40px"><b>Muy Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op7' value="6" required><label for="" style="margin-left:40px"><b>Bueno</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op7' value="4" required><label for="" style="margin-left:40px"><b>Regular</b></label>
                    </div>
                    <div class="row">
                        <input class='form-check-input mt-2 ml-3' type='radio' name='op7' value="2" required><label for="" style="margin-left:40px"><b>Deficiente</b></label>
                    </div>
                    <input type="hidden" name="op8" value="0">
                    <input type="hidden" name="id" value="<?php echo "$id"; ?>">
                    <input type="submit" value="Enviar" class="btn btn-primary">
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