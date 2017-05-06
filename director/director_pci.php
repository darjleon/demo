<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){
?>
<?php include ('include/header.php'); ?>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="profile-element"> 
                        <img alt="image" class="img-circle" src="../img/a5.jpg" width="40%" />
                        <a href="#">
                            <span class="block ">
                                <h4>
                                    <strong class="font-bold">CARMEN OJEDA LEON</strong>
                                    <br><small class="profile-type">RECTOR</small>
                                </h4>                                
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>                
                <li>
                    <a href="director.php">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="director_informacion.php">
                        <i class="fa fa-institution"></i><span class="nav-label">Informacion</span> 
                    </a>
                </li>
                <li>
                    <a href="director_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li>
                    <a href="director_cursos.php">
                        <i class="fa fa-bookmark"></i>
                        <span class="nav-label">Cursos </span>
                    </a>
                </li>
                <li>
                    <a href="director_horarios.php">
                        <i class="fa fa-clock-o"></i>
                        <span class="nav-label">Horarios </span>
                    </a>
                </li>
                <li>
                    <a href="director_asistencia.php">
                        <i class="fa fa-list"></i>
                        <span class="nav-label">Asistencia </span>
                    </a>
                </li>
                <li>
                    <a href="director_pagos.php">
                        <i class="fa fa-usd"></i>
                        <span class="nav-label">Pagos </span>
                    </a>
                </li>
                <li class="active">
                    <a href="director_plancurricular.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Plan Curricular </span>
                    </a>
                </li>
                <li>
                    <a href="director_configuraciones.php">
                        <i class="fa fa-cogs"></i>
                        <span class="nav-label">Configuraciones </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper white-bg "> 
            <div class="col-xs-12 seleccion-curso">
                <h2 style="margin:1em 0">PLanificación Curricular Institucional(PCI)</h2>
                <div class="formatos">
                    <div class="back">
                        <a href="director_plancurricular.php">
                            <button class="button-back cb">
                                <img style="margin: 0;" src="../img/return.png" alt="" width="17">
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Home</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Características</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3">Elementos</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content  p-md">                                        
                                        <p>                        
                                            El PCI es un componente del PEI, en este documento se plasman las intenciones del proyecto educativo institucional que orienta la gestión del aprendizaje; tiene una duración mínima de cuatro años antes de ser ajustado o modificado.
                                        </p>
                                        <p>
                                            El PCI se construye con la información pedagógica generada en el diagnóstico institucional y es de responsabilidad de las autoridades y docentes de la institución educativa.
                                        </p>
                                        <p>Su lógica de construcción es: </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-b-lg">
                                    <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>

                                            <div class="vertical-timeline-content">
                                                <h2>1. Análisis del currículo nacional</h2>                  
                                            </div>
                                        </div>

                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon blue-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>2. Análisis del diagnóstico institucional</h2>
                                            </div>
                                        </div>

                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon lazur-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>3. Delimitación de lineamientos</h2>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content  p-md">                                        
                                        <p>                        
                                            Estos lineamientos serán la base para el planteamiento de los elementos curriculares esenciales en la formulación del PCI
                                        </p>                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 m-b-lg">
                                    <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>

                                            <div class="vertical-timeline-content">
                                                <h2>1. Análisis del currículo nacional</h2>
                                                <p> En este paso se examina el perfil, los objetivos, los contenidos y su secuenciación, la metodología y la evaluación propuestos en el currículo nacional, con el fin de determinar los aprendizajes básicos contextualizados a la institución educativa.
                                                </p>                                                
                                            </div>
                                        </div>

                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon blue-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>

                                            <div class="vertical-timeline-content">
                                                <h2>2. Análisis del diagnóstico institucional</h2>
                                                <p> Al ser el PCI parte del PEI, se analizará el diagnóstico institucional desde tres miradas: </p>
                                                <ul>
                                                    <li> Problemas pedagógicos detectados en la evaluación del componente de aprendizaje.</li>
                                                    <li> Factores internos y externos que influyen en la situación problemática y las posibles estrategias de solución.</li>
                                                    <li> Delimitación de las necesidades de aprendizaje que deberán ser consideradas al momento de adaptar y plantear el pensum de estudios y la carga horaria</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon lazur-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>

                                            <div class="vertical-timeline-content">
                                                <h2>3. Delimitación de lineamientos</h2>
                                                <p> Una vez realizado el análisis del currículo nacional y del diagnóstico institucional, se fijarán lineamientos pedagógicos, metodológicos, de evaluación, del pensum y carga horaria, de planificación, de acción tutorial y de acompañamiento pedagógico, entre otros </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content  p-md">                                                      
                                        <h2>ELEMENTOS DE LA PLANIFICACIÓN CURRICULAR INSTITUCIONAL (PCI)</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-b-lg">
                                    <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>1. Enfoque pedagógico</h2>
                                                <p> Es el eje fundamental del PEI, por tanto, debe ser evidente y concordante con el ideario de la institución educativa.<br>El enfoque pedagógico describe el tipo de estudiante con el que la institución aportará a la sociedad; evidencia la posición de la institución educativa frente a los contenidos, saberes, didáctica, estrategias metodológicas, evaluación, roles, recursos, entre otros; y explicita las corrientes que sustentan los principios epistemológicos y pedagógicos. </p>
                                                <a href="#" class="btn btn-sm btn-primary"> Más información</a>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>2. Contenidos de aprendizaje</h2>
                                                <p> Son los aprendizajes básicos (objetivos y contenidos) de las áreas del conocimiento, establecidos en el pensum de estudios institucional. Debe quedar claro que este documento es una propuesta general por nivel y por subniveles. Los contenidos de aprendizaje por años se concretan en el PCA.<br>El equipo pedagógico, que se halla bajo la responsabilidad de la Junta Académica  debe seleccionar, adaptar, incluir, organizar y secuenciar estos aprendizajes básicos considerando la carga horaria (de cada grado del subnivel, las horas a discreción y el horario de lectura) establecida en el currículo nacional y el contexto institucional.</p>
                                                <a href="#" class="btn btn-sm btn-primary"> Más información</a>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>3. Metodología</h2>
                                                <p> Son los procedimientos que deben conducir el desempeño de los docentes con los estudiantes en el desarrollo de  los aprendizajes; la organización y comunicación en el aula; el desarrollo de los diversos enfoques (disciplinar y epistemológico) en cada área; la forma de establecer las normas y la disposición de los recursos didácticos en función de atender la diversidad y lograr aprendizajes significativos; la organización del tiempo y los espacios que aseguren ambientes de aprendizaje agradables y funcionales con el objeto de crear hábitos y  propiciar el desarrollo de actitudes positivas</p>
                                                <a href="#" class="btn btn-sm btn-primary"> Más información</a>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>4. Evaluación</h2>
                                                <p> Son lineamientos de evaluación y promoción acordes al enfoque pedagógico de la institución en articulación con la normativa nacional vigente (LOEI, Decretos Ejecutivos, Reglamento LOEI,  Acuerdos Ministeriales e Interministeriales, el Currículo Nacional, el Instructivo de Evaluación y los Estándares de Aprendizaje), elementos que  describen las políticas institucionales y estrategias de evaluación que aplicará la institución.</p>
                                                <a href="#" class="btn btn-sm btn-primary"> Más información</a>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>5. Acompañamiento pedagógico</h2>
                                                <p> Son estrategias para la mejora continua de la práctica pedagógica; permiten generar espacios de diálogo y reflexión con el propósito de fortalecer el desempeño profesional directivo y docente y, en consecuencia, mejorar la calidad de la educación en la institución educativa</p>
                                                <a href="#" class="btn btn-sm btn-primary"> Más información</a>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>6. Acción tutorial</h2>
                                                <p> Son estrategias de orientación educativa, inherente al currículo institucional, direccionadas al acompañamiento académico, pedagógico y socioafectivo de la diversidad de estudiantes dentro de un marco formativo y preventivo, que incluya planes de acogida del alumnado, atención a la diversidad y no discriminación.<br>Por otra parte, este elemento permite determinar el procedimiento para designar los tutores así como su perfil y sus competencias</p>
                                                <a href="#" class="btn btn-sm btn-primary"> Más información</a>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>7. Planificación curricular</h2>
                                                <p> Son lineamientos para adaptar y delimitar la estructura, temporalidad, seguimiento y evaluación de los documentos de planificación que la institución utilizará en la práctica pedagógica.<br>El equipo pedagógico institucional deberá establecer los lineamientos para la planificación considerando los elementos esenciales (fines, objetivos, contenidos, metodología, recursos y evaluación) que deben tener los siguientes aspectos:</p>
                                                <a href="#" class="btn btn-sm btn-primary"> Más información</a>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>8. Proyectos Escolares</h2>
                                                <p> Son estrategias pedagógicas que contribuyen a mejorar los aprendizajes<br>Se plantean en función de los intereses de los estudiantes para evidenciar los conocimientos y destrezas obtenidos a lo largo del año lectivo, y fomentan valores de colaboración, emprendimiento y creatividad.<br>Las áreas que sirven como ejes para la formulación de proyectos son Ciencias Naturales y Ciencias Sociales.<br>El equipo pedagógico institucional diseñará los proyectos bajo el marco legal vigente.</p>
                                                <a href="#" class="btn btn-sm btn-primary"> Más información</a>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>9. Adaptaciones curriculares</h2>
                                                <p> Son mecanismos que  promueven el desarrollo de las potencialidades de los estudiantes según sus necesidades<br>
                                                Garantizan la aplicación, ajuste y adaptación del currículo en las diferentes áreas disciplinares, considerando las necesidades educativas de los estudiantes, su diversidad y su contexto, incluyendo planes individuales y especializados para cada estudiante con necesidades educativas especiales (NEE).</p>
                                                <a href="#" class="btn btn-sm btn-primary"> Más información</a>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-file-text"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <h2>10. Planes de mejora</h2>
                                                <p> Se plantean en el PEI y a partir de aquellos que tengan relación con lo curricular, en el PCI, se determinan los lineamientos para desarrollarlos de acuerdo al contexto, necesidades y requerimientos institucionales.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div> 
    </div>
</div>
<?php include ('include/footer.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>
