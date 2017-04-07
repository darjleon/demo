<?php
    session_start();
 
    // Obtengo los datos cargados en el formulario de login.
    $email = $_POST['email'];
    $password = $_POST['password'];
     
    if($email == 'director@gmail.com' && $password == '1234'){
        $_SESSION['email'] = $email;         
        header("Location: director_perfil.php");

    }elseif($email == 'administrativo@gmail.com' && $password == '1234'){    
        $_SESSION['email'] = $email;         
        header("Location: administrativo_perfil.php");

    }elseif($email == 'profesor@gmail.com' && $password == '1234'){
        $_SESSION['email'] = $email;    
        header("Location: profesor_perfil.php");

    }elseif($email == 'representante@gmail.com' && $password == '1234'){
        $_SESSION['email'] = $email;
        header("Location: padre_perfil.php");
        
    }else{
        header("Location: index.html");
    }  
?>