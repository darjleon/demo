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
                    <a href="#">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
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
                <li>
                    <a>
                        <img src="../img/icono persona white.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Alumno</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="padre_hijo1.php"><img src="../img/icono_persona.png" width="20px"> ELKIN DAVID SANNA HERA</a></li>
                        <li><a href="padre_hijo2.php"><img src="../img/icono_persona.png" width="20px"> ALAN JOEL SANNA HERA</a></li>
                    </ul>
                </li>
                <li  class="active">
                    <a>
                        <img src="../img/pago.png" width="15px">
                        <span class="nav-label" style="padding-left:8px">Pagos</span>
                        
                    </a>
                </li>                                         
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <?php include ('include/barra.php'); ?>
        <div class="row wrapper white-bg ">                        
            <div class="profile-image">
                <img src="../img/a8.jpg" class="img-circle circle-border m-b-md" alt="profile">
            </div>
            <div class="profile-info">
                <h2 class="no-margins">ELKIN DAVID SANNA HERA</h2>  
                <p><h3 style="padding-left:10px"><strong>CURSO:</strong></h3> Tercero Bachillerato "A" </p>
                <p><h3 style="padding-left:10px"><strong>DIRIGENTE:</strong></h3> José Pazmiño</p>                  
            </div> 
            <div class="notificacion">
                <span class="mensajes">
                    <i class="fa fa-envelope icono-mensajes"></i>
                    <label class="texto-mensajes">Histórico<label>
                </span>
            </div> 
            



        </div>

        <div class="notificacion">
            <span class="notificaciones">
                <i class="fa fa-bell icono-notificaciones"></i>
                <label class="texto-notificaciones">Realizar Pagos<label>
            </span>
        </div> 
        
        <div class="lista-prof"> 
            <select onchange="selectProfAsist()" class="form-control select-prof-asist" >
                <option value="./director_8A.php" selected="selected">PERIODO: 2016-2017</option>
                
            </select>
        </div>
        <div class="lista-prof"> 
            <select onchange="selectProfAsist()" class="form-control select-prof-asist" >
                <option value="./director_8A.php" selected="selected">Quimiestre 1</option>
                <option value='./director_asistencia8A.php'>Quimiestre 2</option>
                
            </select>
        </div>



        <table>
          <tr>
            <th>Año Lectivo</th>
            <th>Quimestral</th>
            <th>Descripcion</th>
            <th>Valor</th>
            <th>Estado</th>
            <th></th>
          </tr>
          <tr>
            <td>Periodo: 2016-2017</td>
            <td>PRIMERO</td>
            <td>Matricula</td>
            <td>$80.00</td>
            <td>Pendiente</td>
            <td>PAGAR</td>
          </tr>
          
        </table>

        
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


    