
<?php
$str = "the Cat sat on the Mat";

print "Original statement: \n\t" . $str . "\n";
print "\t0123456789012345678901\n";
print "Uppercase: " . strtoupper($str) . "\n";
print "Lowercase: " . strtolower($str) . "\n";
print "Ucfirst: " . ucfirst($str) . "\n";
print "Ucwords: " . ucwords($str) . "\n";

print "String position 'on': " . strpos($str, "on") . "\n";
print "The length of the string: " . strlen($str) . "\n";

print 'Count number of the "at": ' . substr_count($str, "at") . "\n";


?>
