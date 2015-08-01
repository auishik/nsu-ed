<?php
  function ConnectDb() {
    $connect = mysqli_connect("localhost","username","password","nsu-ed") or die ("Error connecting to database.");
  }
?>
