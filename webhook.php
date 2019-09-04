<?php
echo "WEBHOOK TEST : \n" ;  

$hookfile="test-".date('ymdhis').".json";

$input = @file_get_contents("php://input");
$event_json = json_encode(json_decode($input)); 

file_put_contents("/opt/app-root/src/$hookfile", $event_json);

echo "- Done\n" ;  
?>
