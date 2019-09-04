<?php
echo "WEBHOOK TEST : \n" ;  
$hookfile=date("ymdhis").".json"
  
$myfile = null; 
$myfile = fopen("/opt/app-root/src/$hookfile", "w") or die("Unable to open file!");

$txt = json_decode(json_encode($_POST));
fwrite($myfile, $txt);
$txt = json_decode(json_encode($_GET));
fwrite($myfile, $txt);

fclose($myfile); 

echo "- Done\n" ;  
?>
