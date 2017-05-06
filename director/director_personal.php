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
                    <a href="#">
                        <i class="fa fa-th-large"></i> <span class="nav-label">Mi Perfil</span>
                    </a>
                </li>
                <li class="active">
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
                <li>
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
                <h2 style="margin:1em 0">
                    Lista de Personal Educativo
                </h2>
                <div class="formatos">
                <div class="back">
                    <a href="director_informacion.php">
                        <button class="button-back cb">
                            <img style="margin: 0;" src="../img/return.png" alt="" width="17">
                        </button>
                    </a>
                </div>
                    <!--<a class="formatos-link" href="#"> 
                        <img src="../img/cuadricula.png" alt="" width="17">
                    </a>                    
                    <a class="formatos-link" href="director_profesorescuadricula.php"> 
                        <img src="../img/list.png" alt="" width="20">
                    </a>-->
                </div>
            </div>
        </div>
        <div class="row wrapper wrapper-content">                    
            <div id="admin-list" class="col-xs-12 director-profesores">  
                <!--

                <div class="docente">                    
                    <div class="representante">                        
                        <p>
                            TERESA CORREA ZAMBRANO
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente">                    
                    <div class="representante">                        
                        <p>
                            FANNY ESPINOZA MOLINA
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente">                    
                    <div class="representante">                        
                        <p>
                            TERESA LEON BRITO
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente">                    
                    <div class="representante">                        
                        <p>
                            ANGELICA MENDEZ MORENO
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente">                    
                    <div class="representante">                        
                        <p>
                            LOLY NIETO INTRIAGO
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente">                    
                    <div class="representante">                        
                        <p>
                            LEONELA PATIÑO ROGEL
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente">                    
                    <div class="representante">                        
                        <p>
                            CARMEN OJEDA LEON
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente">                    
                    <div class="representante">                        
                        <p>
                            NANCY ODEJA LEON
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>-->                

            </div>
        </div> 
    </div>
</div>

<script type="text/javascript">


     var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          getTeacher(this);
          
        }
      };
      xhttp.open("GET", "xml/administrativos.xml", true);
      xhttp.send();

      function getTeacher(xml){
        var i,j,k;
          var xmlDoc = xml.responseXML;
         //var table="<p><strong>Profesores</strong></p>";
          var x = xmlDoc.getElementsByTagName("administrativo");
          for (i = 0; i <x.length; i++) { 

            /*<div class="docente">                    
                    <div class="representante">                        
                        <p>
                            LEONELA PATIÑO ROGEL
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>*/

            var newdiv = document.createElement('div');
            newdiv.setAttribute('class',"docente")
            var newtr = document.createElement('div');
            newtr.setAttribute('class',"representante");
            



            

           

            var pName=document.createElement('p');

            var textName = document.createTextNode(x[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue + " " + x[i].getElementsByTagName("apellidos")[0].childNodes[0].nodeValue);

            pName.appendChild(textName);

            var span = document.createElement('span');

            var btnRep = document.createElement('button');
            btnRep.setAttribute('type',"button");
            btnRep.setAttribute('class',"btn btn-student-list");
            btnRep.setAttribute('data-toggle',"modal");
            btnRep.setAttribute('data-target',"#myModal2");

             var imgRepMail=document.createElement('img');
            
            imgRepMail.setAttribute('src',"../img/mail.png");

            imgRepMail.setAttribute('alt',"");

            btnRep.appendChild(imgRepMail);

            span.appendChild(btnRep);

            

            var aRep=document.createElement('a');
            aRep.setAttribute('href',"");

            aRep.innerHTML = "Perfil";

            span.appendChild(aRep);
            

            pName.appendChild(span);

            newtr.appendChild(pName);
            newdiv.appendChild(newtr);

            document.getElementById("admin-list").appendChild(newdiv);


          }



      }
</script>

<?php include ('include/footer.php'); ?>
<?php
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: index.html");
  }
?>
