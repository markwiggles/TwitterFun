<?php


//Trying to get this to run from browser

print "testing \n";

$cmd = "php.exe MyFilter.php";

//popen("start /B ". $cmd, "r");

exec( $cmd . " > \dev\null");

//$WshShell = new COM("WScript.Shell");
//$oExec = $WshShell->Run($cmd, 0, false);

//pclose(popen("start /B ".$cmd ." 2>nul >nul", "r"));  // mode = "a" since I had some logs to edit

?>
