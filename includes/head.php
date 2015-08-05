<?php
  session_start();
//$_SESSION["username"]= "admin"; //delete this
  function whoami() { //name is similar to unix command
    if(!isset($_SESSION["username"])) return NULL;
    else return $_SESSION["username"];
  }

  function jump($address) { //redirection function
    header("Location: $address");
  }
  $USERNAME= whoami();
?>
