 <?php
    $login = $_GET["login"];
    $pass = $_GET["pass"];
    //echo "Login: ".$login." <br>Pass: ".$pass;
      if($login == "root" and $pass == "" ){
         echo "Auth successful";
    }else{
        echo "Aurh error";
      }
 ?>  