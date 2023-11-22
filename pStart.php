<?php
$ii = 0;
$userfilename = "user.txt";
if (file_exists($userfilename)) {
    $handle = fopen($userfilename,"r");
    $inhalt = "";
    while (!feof($handle))
    {
      $ii++;
      $inhalt .= fgets($handle);
    }
    fclose($handle);
   
    $inhalt .= $ii;
    $inhalt .= "\n";    
    
    $handle = fopen($userfilename,"w");
    fputs($handle, $inhalt);
    fclose($handle);
}
else {
	$handle = fopen($userfilename, "w");
    $ii++;
    $ii .= "\n";  
    fwrite($handle,$ii);
    fclose($handle);
}
print ($ii);
?>


