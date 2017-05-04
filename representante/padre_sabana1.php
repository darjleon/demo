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
                                <h3><strong class="font-bold">CINTHIA HERA RODRIGUEZ</strong></h3>
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="logo" src="../img/logo unico.png" width="50px" />
                    </div>
                </li>
                <li>
                    <a href="padre.php">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="padre_institucion.php">
                        <i class="fa fa-institution"></i> <span class="nav-label">Institucion</span> 
                    </a>
                </li>
                <li>
                    <a href="padre_notificacion.php">
                        <i class="fa fa-newspaper-o"></i>
                        <span class="nav-label">Notificaciones </span>
                        <span class="label label-primary">Nuevo</span>
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
                        <img src="../img/calificaciones.png" style="width:50px"> | Calificaciones| Periodo : <label>2016-2017</label> | Sabana
                    </h2>
                </div>                                            
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox-content">   
                        <div class="table-responsive">                                 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center encabezado-libreta" style="background-color:#9A9B9F">Materia</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">P1Q1</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">P2Q1</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">P3Q1</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">EXQ1</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">P1Q2</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">P2Q2</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">P3Q2</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">EXQ2</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">Nota</th>
                                        <th class="encabezado-libreta" style="background-color:#9A9B9F">Conducta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td><strong>MATEMATICAS</strong></td>
                                        <td class="n">10</td>          
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n nb"><strong>10</strong></td>
                                        <td class="n nb"><strong>A</strong></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>LENGUA Y LITERATURA</strong></td>
                                        <td class="n">10</td>          
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n nb"><strong>10</strong></td>
                                        <td class="n nb"><strong>A</strong></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>LENGUA EXTRANJERA</strong></td>
                                        <td class="n">10</td>          
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n nb"><strong>10</strong></td>
                                        <td class="n nb"><strong>A</strong></td>   
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>QUIMICA</strong></td>
                                        <td class="n">10</td>          
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n nb"><strong>10</strong></td>
                                        <td class="n nb"><strong>A</strong></td>
                                    </tr>
                                        <tr class="text-center">
                                        <td><strong>FISICA</strong></td>
                                        <td class="n">10</td>          
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n nb"><strong>10</strong></td>
                                        <td class="n nb"><strong>A</strong></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>PROGRAMACION EN LENGUAJE ESTRUCTURADO</strong></td>
                                        <td class="n">10</td>          
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n nb"><strong>10</strong></td>
                                        <td class="n nb"><strong>A</strong></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>INFORMATICA APLICADA A LA EDUCACION</strong></td>
                                        <td class="n">10</td>          
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n">10</td>    
                                        <td class="n nb"><strong>10</strong></td>
                                        <td class="n nb"><strong>A</strong></td>   
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>DESARROLLO DEL PENSAMIENTO FILOSOFICO</strong></td>
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n nm"><strong>7</strong></td>
                                        <td class="n nm"><strong>C</strong></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>EDUCACION ARTISTICA</strong></td>
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n nm"><strong>7</strong></td>
                                        <td class="n nm"><strong>C</strong></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>RELACION EN EL EQUIPO DE TRABAJO</strong></td>
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n nb"><strong>9</strong></td>
                                        <td class="n nb"><strong>B</strong></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>FYOL</strong></td>
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n nm"><strong>7</strong></td>
                                        <td class="n nm"><strong>C</strong></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>HISTORIA Y CIENCIAS SOCIALES</strong></td>
                                        <td class="n">5</td>          
                                        <td class="n">5</td>          
                                        <td class="n">5</td>          
                                        <td class="n">5</td>          
                                        <td class="n">5</td>          
                                        <td class="n">5</td>          
                                        <td class="n">5</td>          
                                        <td class="n">5</td>          
                                        <td class="n nr"><strong>5</strong></td>
                                        <td class="n nr"><strong>D</strong></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>VALORES HUMANOS</strong></td>
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n">9</td>          
                                        <td class="n nb"><strong>9</strong></td>
                                        <td class="n nb"><strong>B</strong></td>  
                                    </tr>
                                    <tr class="text-center">
                                        <td><strong>EDUCACION FISICA</strong></td>
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n">7</td>          
                                        <td class="n nm"><strong>7</strong></td>
                                        <td class="n nm"><strong>C</strong></td> 
                                    </tr>
                                </tbody>
                            </table> 
                        </div>  
                        <ul class="text-center">
                            <li class="semaforo"><span class="nverde"></span>Nota Buena</span></li>
                            <li class="semaforo"><span class="nnaranja"></span>Nota Media</li>
                            <li class="semaforo"><span class="nroja"></span>Nota Roja</li>
                        </ul>
                        <button type="button" class="btn btn-info">IMPRIMIR</button>
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