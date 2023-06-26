<?php
  $servername = "localhost";
  $username = "root";
  $passoword = "";
  $db_name = "moodmonitor";

  $connect = mysqli_connect($servername, $username, $passoword, $db_name);

  if(mysqli_connect_error()) {
    echo "Error connecting to database ";
  }
  else {
    echo "Database " . $db_name . " successfully connected";
  }
?>