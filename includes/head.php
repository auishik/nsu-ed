<?php
  // server should keep session data for AT LEAST 1 hour
  //ini_set('session.gc_maxlifetime', 3600);

  // each client should remember their session id for EXACTLY 1 hour
  //session_set_cookie_params(3600);

  /*session_start('my',-expires=1440,-usecookie=true); // ready to go!

  if(session_result('my') != 'load') => {
  session_addVar('my', 'username')
  }*/

  session_start();

  require_once("database.php");

  function whoami() { //name is similar to unix command
    if(!isset($_SESSION["username"])) return NULL;
    else return $_SESSION["username"];
  }

  function jump($address) { //redirection function
    header("Location: $address");
  }
  //$USERNAME= whoami();
  $USERNAME = "admin"; //hard login, temporary user, to be removed
  ConnectDb();
  function GetId($username){
    $query= "SELECT id FROM user WHERE username = '$username'";
    $result= query($query);
    $row= mysqli_fetch_array($result);
    return $row[0];
  }
  $USERID= GetId($USERNAME);
?>
