<script type="text/javascript">
    var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          getSchedule(this);
          
        }
      };
      xhttp.open("GET", "xml/schedule3INFORMATICA.xml", true);
      xhttp.send();

      function getSchedule(xml){
        var i,j,k;
          var xmlDoc = xml.responseXML;
          var x = xmlDoc.getElementsByTagName("hour");
          for (i = 0; i <x.length; i++) { 
                var newtr = document.createElement('tr');
                
                var newtd = document.createElement("td");
                newtd.setAttribute('class',"scheduler horas");
                newtd.setAttribute('style',"vertical-align: middle;");

                var span1 = document.createElement('span');
                span1.setAttribute('class', "c-hour");

                var span2 = document.createElement('span');
                


                switch(x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue) {
                    case '1':
                        span1.innerHTML="7:00<br>7:45";
                        span2.setAttribute('class', "hour hour-1");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '2':
                        span1.innerHTML="7:45<br>8:30";
                        span2.setAttribute('class', "hour hour-2");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '3':
                        span1.innerHTML="8:30<br>9:15";
                        span2.setAttribute('class', "hour hour-3");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '4':
                        span1.innerHTML="9:15<br>10:00";
                        span2.setAttribute('class', "hour hour-1");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '5':
                        span1.innerHTML="10:30<br>11:15";
                        span2.setAttribute('class', "hour hour-2");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '6':
                        span1.innerHTML="11:15<br>12:00";
                        span2.setAttribute('class', "hour hour-3");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '7':
                        span1.innerHTML="12:00<br>12:45";
                        span2.setAttribute('class', "hour hour-1");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '8':
                        span1.innerHTML="13:15<br>14:00";
                        span2.setAttribute('class', "hour hour-2");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    case '9':
                        span1.innerHTML="14:00<br>14:45";
                        span2.setAttribute('class', "hour hour-3");
                        span2.innerHTML="<span>"+x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue+"</span>";
                        break;
                    
                }

                newtd.appendChild(span1);
                newtd.appendChild(span2);

                var newtd1 = document.createElement("td");
                newtd1.setAttribute('class',"subject");
                newtd1.setAttribute('style',"vertical-align: middle;");
                newtd1.innerHTML=x[i].getElementsByTagName("day1")[0].childNodes[0].nodeValue;
                var newtd2 = document.createElement("td");
                newtd2.setAttribute('class',"subject");
                newtd2.setAttribute('style',"vertical-align: middle;");
                newtd2.innerHTML=x[i].getElementsByTagName("day2")[0].childNodes[0].nodeValue;
                var newtd3 = document.createElement("td");
                newtd3.setAttribute('class',"subject");
                newtd3.setAttribute('style',"vertical-align: middle;");
                newtd3.innerHTML=x[i].getElementsByTagName("day3")[0].childNodes[0].nodeValue;
                var newtd4 = document.createElement("td");
                newtd4.setAttribute('class',"subject");
                newtd4.setAttribute('style',"vertical-align: middle;");
                newtd4.innerHTML=x[i].getElementsByTagName("day4")[0].childNodes[0].nodeValue;
                var newtd5 = document.createElement("td");
                newtd5.setAttribute('class',"subject");
                newtd5.setAttribute('style',"vertical-align: middle;");
                newtd5.innerHTML=x[i].getElementsByTagName("day5")[0].childNodes[0].nodeValue;

                newtr.appendChild(newtd);
                newtr.appendChild(newtd1);
                newtr.appendChild(newtd2);
                newtr.appendChild(newtd3);
                newtr.appendChild(newtd4);
                newtr.appendChild(newtd5);

                document.getElementById("horario").appendChild(newtr);



          }

      }

</script>
