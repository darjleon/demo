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
                <h2 style="margin:1em 0" >
                    Lista de Profesores
                </h2>
                <div class="formatos">
                <div class="back">
                    <a href="director_cursos_cuadricula.php">
                        <button class="button-back cb">
                            <img style="margin: 0;" src="../img/return.png" alt="" width="17">
                        </button>
                    </a>
                </div>
                    <a class="formatos-link" href="#"> 
                        <img src="../img/cuadricula.png" alt="" width="17">
                    </a>                    
                    <a class="formatos-link" href="director_profesores.php"> 
                        <img src="../img/list.png" alt="" width="20">
                    </a>
                </div>
            </div>
        </div>
        <div class="row wrapper wrapper-content">                    
            <div id="profesores-cuadricula" class="col-xs-12 director-profesores-cuadricula">
                <!--<div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            RUTH ARGUELLO MENDOZA 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            TATIANA ARICHAVALA CRESPIN
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            JAVIER ARVELAEZ MOSQUERA 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            MICHELL CAJAMARCA
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            LUIS CAJO
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            MARIANA CAMACHO CUJI
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            GLENDA CANDEL CARBO
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            TATIANA CARREÑO QUIROZ 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            HUGO CHAVEZ
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            VIVIANA CIRINO DE LA ROSA 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            LUIS CORREA ZAMBRANO  
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            GLORIA ESPAÑA ARIAS 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            RAUL HERRERA CERCADO
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            DANILO HERRERA MOREIRA 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            RUTH LLERENA YULAN  
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            DENISSE MARCILLO
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            JUAN LOPEZ MARURI  
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            CLAUDIA LOPEZ SANCHEZ  
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            MARCOS PAZAN REYES 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            ANA PLUA RIVERA 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            CAROLINA QUIROZ SANTOS
                            <hr>  
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            SONIA RODRIGUEZ NOBOA 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            MERY URBINA ANDALUZ 
                            <hr>
                            <span><button type="button" class="btn btn-student-list" data-toggle="modal" data-target="#myModal2"><img src="../img/mail.png" alt="">
                            </button><a href="">Perfil</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="docente director-profesores">                    
                    <div class="representante">                        
                        <p>
                            ANGELICA VILLABLANCA TRUJILLO 
                            <hr>
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
      xhttp.open("GET", "xml/profesores.xml", true);
      xhttp.send();

      function getTeacher(xml){
        var i,j,k;
          var xmlDoc = xml.responseXML;
         //var table="<p><strong>Profesores</strong></p>";
          var x = xmlDoc.getElementsByTagName("profesor");
          for (i = 0; i <x.length; i++) { 


            var newdiv = document.createElement('div');
            newdiv.setAttribute('class',"docente director-profesores")
            var newtr = document.createElement('div');
            newtr.setAttribute('class',"representante");
           

            var pName=document.createElement('p');

            var textName = document.createTextNode(x[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue + " " + x[i].getElementsByTagName("apellidos")[0].childNodes[0].nodeValue);

            var hr = document.createElement('hr');

            pName.appendChild(textName);
            

            var span = document.createElement('span');

            var btnRep = document.createElement('button');
            btnRep.setAttribute('type',"button");
            btnRep.setAttribute('class',"btn btn-student-list");
            btnRep.setAttribute('data-toggle',"modal");
            btnRep.setAttribute('data-target',"#myModal2");

             var imgRepMail=document.createElement('img');
            
            imgRepMail.setAttribute('src',"../img/mail.png");

            imgRepMail.setAttribute('alt'," ");

            btnRep.appendChild(imgRepMail);

            span.appendChild(btnRep);

            

            var aRep=document.createElement('a');
            aRep.setAttribute('href'," ");

            aRep.innerHTML = "Perfil";

            span.appendChild(aRep);

            //pName.appendChild(hr);

            //pName.appendChild(span);

            newtr.appendChild(pName);
            newtr.appendChild(hr);
            newtr.appendChild(span);
            newdiv.appendChild(newtr);

            document.getElementById("profesores-cuadricula").appendChild(newdiv);


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
