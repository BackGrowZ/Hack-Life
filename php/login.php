<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //Username et password envoyer par formulaire
        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']);

        $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array(result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysql_num_rows($result);

        if($count == 1) {
            session_register('myuername');
            $_SESSION['login_user'] = $myusername

            header("location: welcome.php")
        }else {
            $error = "Identifiant ou mot de passe invalide"
        }

    }
?>