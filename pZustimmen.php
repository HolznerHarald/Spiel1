<?php
$ii = 1;
$userfilename = "user.txt";

$handle = fopen($userfilename,"r");
$inhalt = "";
$Zeile = "";
$Gefunden=0;
while (!feof($handle))
{
    $ii++;
    $zeile = fgets($handle);
    if($zeile==$_REQUEST["wert"]."\n"){  
        $zeile=$_REQUEST["wert"]."g".$_REQUEST["wert2"]."\n";        
        $inhalt .= $zeile; 
        $Gefunden=1;
    }else{
        if($zeile!=""){
            $inhalt .= $zeile;
        }
    }
}
fclose($handle);
  
if($Gefunden==1){
    $handle = fopen($userfilename,"w");
    fputs($handle, $inhalt);
    fclose($handle);

    $Spielfilename = $_REQUEST["wert"].".txt";
    $handle = fopen($Spielfilename,"a");    
    fwrite($handle,$_REQUEST["wert2"].":Zustimmen"."\n");
    fwrite($handle,$_REQUEST["wert2"].":Ende");
    fclose($handle);
}else{
    print ("not aktiv");
}
?>


