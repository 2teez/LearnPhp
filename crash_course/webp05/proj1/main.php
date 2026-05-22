<?php
print "I'm in main php file\n";
// using relative path
//require_once "file2.php";
// using absolute path
$callingScriptPath = __DIR__;
print "calling script path: $callingScriptPath\n";

require_once __DIR__ . "/file2.php";

print "Back in main.php file\n";

?>
