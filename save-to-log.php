<?php
  //$log_file_name = 'DATABASE.txt'; // Change to the log file name
  //$message = $_POST['message']; // incoming message
  //file_put_contents($log_file_name, $message, FILE_APPEND);
  //header('Location: index.html'); // redirect back to the main site


  if(!empty($_POST['message'])){
    $data = $_POST['message'];
    $fname = "DATABASE.txt";

    $file = fopen($fname);//opens file
    fwrite($file, $data);
    fclose($file);
  }


?>
