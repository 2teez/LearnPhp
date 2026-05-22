
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

// using str_replace(), substr(), strstr() or stristr()
$wrd = "Java didn't see, JavaScript coming...";
print "Using substr(): " . substr($wrd, 16) . "\n";
print "Using substr(): " .
    substr($wrd, strpos($wrd, "JavaScript"), strlen("JavaScript")) .
    "\n";
print "Using strstr(): " . strstr($wrd, "JavaScript") . "\n";
print "Using stristr(): " . stristr($wrd, "javascript") . "\n";

// using str_replace() an d substr_replace()
$wrd = "Java didn't see, JavaScript coming...";
print "Using str_replace(): " . str_replace("JavaScript", "PHP", $wrd) . "\n";
print "Using substr_replace(): " .
    substr_replace(
        $wrd,
        "PHP",
        strpos($wrd, "JavaScript"),
        strlen("JavaScript"),
    ) .
    "\n";

// removing spaces
$wrd = "  Hello, World!  ";
print "Using trim(): " . trim($wrd) . "\n";
print "Using ltrim(): " . ltrim($wrd) . "\n";
print "Using rtrim(): " . rtrim($wrd) . "\n";

// using str_replace to remove tabs and newlines
$wrd = "Hello,\n\tWorld!";
print "Original: \n\t" . $wrd . "\n";
print "Using str_replace(): " . str_replace(["\n", "\t"], "", $wrd) . "\n";

$catSat = <<<EOT
the
    cat    sat
    \t\t on    the
mat

EOT;
print "Original: \n\t" . $catSat . "\n";
print "Using str_replace(): " .
    str_replace(["\n", "\t", "    "], " ", trim($catSat)) .
    "\n";


?>
