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
                                    <strong class="font-bold">CINTHIA HERA RODRIGUEZ</strong>
                                    <br><small class="profile-type">REPRESENTANTE</small>
                                </h4>                                
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>
                <li>
                    <a href="padre.php">
                        <i class="fa fa-th-large"></i><span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="padre_institucion.php">
                        <i class="fa fa-institution"></i><span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="padre_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-warning">Nuevo</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <img src="../img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumno</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li class="active">
                            <a href="padre_hijo1.php">
                                <img src="../img/icono persona.png" width="20px">ELKIN DAVID SANNA HERA
                            </a>
                        </li>
                        <li>
                            <a href="padre_hijo2.php">
                                <img src="../img/icono persona.png" width="20px">ALAN JOEL SANNA HERA
                            </a>
                        </li>
                    </ul>
                </li>                                     
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <?php include ('include/hijo1.php'); ?>
            <div class="col-sm-4 col-lg-2 return-button">
                <a href="padre_hijo1.php">
                    <button type="button" class="btn btn-outline btn-success return">
                        <img src="../img/return.png" alt="" width="17">
                        <span>
                            Regresar
                        </span>
                    </button>
                </a>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-left" style="margin-top:0">
                        <img src="../img/estadistica.png" style="width:50px"> Estadistica 
                    </h2>
                </div>                                            
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class=" estadisticas" style="padding-top:10px ">
                        <div class="tabs-container"> 
                            <ul class="nav nav-tabs text-center">
                                <li class="active estadistica-opcion">
                                    <a data-toggle="tab" href="#tab-estadistica1">Materia</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-estadistica2">Conducta</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-estadistica3">Asistencia</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="tab-estadistica1" class="tab-pane active">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <h5 class="text-right" style="padding-top: 10px">Seleccione una materia</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <select class="form-control" id="materia">
                                                <option value="m1">MATEMATICAS</option>
                                                <option value="m2">LENGUA Y LITERATURA</option>
                                                <option value="m3">QUIMICA</option>
                                                <option value="m4">PROGRAMACION EN LENGUAJE ESTRUCTURADO</option>
                                                <option value="m5">LENGUA EXTRANJERA</option>
                                                <option value="m6">FISICA</option>
                                                <option value="m7">INFORMATICA APLICADA A LA EDUCACION</option>
                                                <option value="m8">DESARROLLO DEL PENSAMIENTO FILOSOFICO</option>
                                                <option value="m9">EDUCACION ARTISTICA</option>
                                                <option value="m10">RELACION EN EL EQUIPO DE TRABAJO</option>
                                                <option value="m11">FYOL</option>
                                                <option value="m12">HISTORIA Y CIENCIAS SOCIALES</option>
                                                <option value="m13">EDUCACION ARTISTICA</option>
                                                <option value="m14">VALORES HUMANOS</option>
                                                <option value="m15">EDUCACION FISICA</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <h5 class="text-right" style="padding-top: 10px">Seleccione una quimestre</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <select class="form-control" id="quimestre">
                                                <option value="q1">Primer Quimestre</option>
                                                <option value="q2">Segundo Quimestre</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-info mt-1">IMPRIMIR</button>
                                </div>   
                            </div>
                            <div id="tab-estadistica2" class="tab-pane">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <h5 class="text-right" style="padding-top: 10px">Seleccione una materia</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <select class="form-control" id="materia">
                                                <option value="m1">MATEMATICAS</option>
                                                <option value="m2">LENGUA Y LITERATURA</option>
                                                <option value="m3">QUIMICA</option>
                                                <option value="m4">PROGRAMACION EN LENGUAJE ESTRUCTURADO</option>
                                                <option value="m5">LENGUA EXTRANJERA</option>
                                                <option value="m6">FISICA</option>
                                                <option value="m7">INFORMATICA APLICADA A LA EDUCACION</option>
                                                <option value="m8">DESARROLLO DEL PENSAMIENTO FILOSOFICO</option>
                                                <option value="m9">EDUCACION ARTISTICA</option>
                                                <option value="m10">RELACION EN EL EQUIPO DE TRABAJO</option>
                                                <option value="m11">FYOL</option>
                                                <option value="m12">HISTORIA Y CIENCIAS SOCIALES</option>
                                                <option value="m13">EDUCACION ARTISTICA</option>
                                                <option value="m14">VALORES HUMANOS</option>
                                                <option value="m15">EDUCACION FISICA</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <h5 class="text-right" style="padding-top: 10px">Seleccione una quimestre</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <select class="form-control" id="quimestre">
                                                <option value="q1">Primer Quimestre</option>
                                                <option value="q2">Segundo Quimestre</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-info">IMPRIMIR</button>
                                </div>
                            </div>
                            <div id="tab-estadistica3" class="tab-pane">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <h5 class="text-right" style="padding-top: 10px">Seleccione una materia</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <select class="form-control" id="materia">
                                                <option value="m1">MATEMATICAS</option>
                                                <option value="m2">LENGUA Y LITERATURA</option>
                                                <option value="m3">QUIMICA</option>
                                                <option value="m4">PROGRAMACION EN LENGUAJE ESTRUCTURADO</option>
                                                <option value="m5">LENGUA EXTRANJERA</option>
                                                <option value="m6">FISICA</option>
                                                <option value="m7">INFORMATICA APLICADA A LA EDUCACION</option>
                                                <option value="m8">DESARROLLO DEL PENSAMIENTO FILOSOFICO</option>
                                                <option value="m9">EDUCACION ARTISTICA</option>
                                                <option value="m10">RELACION EN EL EQUIPO DE TRABAJO</option>
                                                <option value="m11">FYOL</option>
                                                <option value="m12">HISTORIA Y CIENCIAS SOCIALES</option>
                                                <option value="m13">EDUCACION ARTISTICA</option>
                                                <option value="m14">VALORES HUMANOS</option>
                                                <option value="m15">EDUCACION FISICA</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <h5 class="text-right" style="padding-top: 10px">Seleccione una quimestre</h5>
                                        </div>
                                        <div class="col-lg-4">
                                            <select class="form-control" id="quimestre">
                                                <option value="q1">Primer Quimestre</option>
                                                <option value="q2">Segundo Quimestre</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-info">IMPRIMIR</button>
                                </div> 
                            </div>
                        </div>
                    </div>                                        
                </div>          
            </div>             
        </div>
    </div>
</div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            
            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];
        });
    </script>
</body>
</html>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>