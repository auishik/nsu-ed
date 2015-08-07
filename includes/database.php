<?php
  function ConnectDb() {
    global $connect;
    $connect = mysqli_connect("localhost","root","1234","nsu_ed");

    if(mysqli_connect_errno()) {
      echo "Unable to connect to database: " . mysqli_connect_error() ."<br/>";
    }
  }

  function query($query) {
    global $connect;
    $result = mysqli_query($connect,$query) or die ("Error in query.");
    return $result;
  }

  function CloseDb() {
    global $connect;
    mysqli_close($connect);
  }
?>
