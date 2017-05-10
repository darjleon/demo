            <div id="alumnos-cuad" class="alumnos-master"> 

            </div>

<script type="text/javascript">


     var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          getCourse(this);
          
        }
      };
      xhttp.open("GET", "xml/course8A.xml", true);
      xhttp.send();

      function getCourse(xml){
        var i,j,k;
          var xmlDoc = xml.responseXML;
         //var table="<p><strong>Profesores</strong></p>";
          var x = xmlDoc.getElementsByTagName("student");
          for (i = 0; i <x.length; i++) { 
            var newdiv = document.createElement('div');
            newdiv.setAttribute('class',"alumnos-cuadricula")


            var divAl = document.createElement('div');
            divAl.setAttribute('class',"alumno");


            var imgAl=document.createElement('img');
            imgAl.setAttribute('alt'," ");
            imgAl.setAttribute('src',"../img/icono_persona.png");
            imgAl.setAttribute('width',"25");

            divAl.appendChild(imgAl);

            var h4Al = document.createElement('h4');
            h4Al.innerHTML=x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + " " + x[i].getElementsByTagName("lastName")[0].childNodes[0].nodeValue;

            divAl.appendChild(h4Al);

            var aAl=document.createElement('a');
            aAl.setAttribute('href',"");

            var btnAl = document.createElement('button');
            btnAl.innerHTML="Perfil";

            aAl.appendChild(btnAl);

            divAl.appendChild(aAl);



            var divRep=document.createElement('div');
            divRep.setAttribute('class',"representante");

            var imgRep=document.createElement('img');
            imgRep.setAttribute('alt'," ");
<<<<<<< HEAD
            imgRep.setAttribute('src',"img/REPRESENTANTE.png");
=======
            imgRep.setAttribute('src',"../img/REPRESENTANTE.png");
>>>>>>> 648a23f65d952ac3203e0ca2d19aef97cb2220bc
            imgRep.setAttribute('width',"25");

            divRep.appendChild(imgRep);

            var h4Rep = document.createElement('h4');
            h4Rep.innerHTML="Nombres y Apellidos";

            divRep.appendChild(h4Rep);

            var aRep=document.createElement('a');
            aRep.setAttribute('href',"");

            var btnRep = document.createElement('button');
            btnRep.innerHTML="Perfil";

            aRep.appendChild(btnRep);

            var aRep2=document.createElement('a');
            aRep2.setAttribute('href',"");

            var btnRep2 = document.createElement('button');
            btnRep2.innerHTML="Representante";

            aRep2.appendChild(btnRep2);

            divRep.appendChild(aRep);
            divRep.appendChild(aRep2);

            newdiv.appendChild(divAl);
            newdiv.appendChild(divRep);

            document.getElementById("alumnos-cuad").appendChild(newdiv);


          }



      }
</script>