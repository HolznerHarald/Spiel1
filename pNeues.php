<?php
$ii = 1;
$userfilename = "user.txt";

$handle = fopen($userfilename,"r");
$inhalt = "";
$Zeile = "";
while (!feof($handle))
{
    $ii++;
    $zeile = fgets($handle);
    if($zeile==$_REQUEST["wert"]){
        $zeile2="a";        
        $zeile2.=$zeile;
        $inhalt .= $zeile2;        
    }else{
        $inhalt .= $zeile;
    }
}
fclose($handle);
    
$handle = fopen($userfilename,"w");
fputs($handle, $inhalt);
fclose($handle);
//Spieledatei öffnen
$Spielfilename = "a".$_REQUEST["wert"].".txt";

if (file_exists($Spielfilename)) {
   if (!unlink($Spielfilename)) { 
    echo ("$Spielfilename cannot be deleted due to an error"); 
   } 
   else { 
    echo ("$Spielfilename has been deleted"); 
   } 
}

$handle = fopen($Spielfilename, "w");
fwrite($handle,$_REQUEST["wert"].":ENDE"."\n");
fclose($handle);
?>

