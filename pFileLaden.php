<?php
$ii = 0;
$userfilename = $_REQUEST["wert"];
$handle = fopen($userfilename,"r");
$inhalt = "";
$zeile="";

while (!feof($handle))
{    
    $zeile = fgets($handle);
    if($zeile!=""){
            $inhalt .= $zeile;
    } 
}

fclose($handle);
print ($inhalt);
?>


