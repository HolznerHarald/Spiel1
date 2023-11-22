<?php

$Spielfilename = $_REQUEST["wert"];
$handle = fopen($Spielfilename,"a"); 
$zz=$_REQUEST["wert2"];
fwrite($handle,"\n");
fwrite($handle,$_REQUEST["wert2"]);    
fwrite($handle,"\n");
fwrite($handle,$_REQUEST["wert3"]);    
fclose($handle);

?>


