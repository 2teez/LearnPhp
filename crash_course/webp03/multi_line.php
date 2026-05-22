<?php
$name = "JavaScript";

$line =
    '
My name is ' .
    $name .
    ' and I\'m pleased to be learning PHP. ' .
    PHP_EOL .
    "PHP is a server-side scripting language" .
    " that is easy to learn and use.\n";

print $line;
echo str_repeat("=", strpos($line, ".")) . "\n";
$smiley = "\u{1F60A}";
$elephant = "\u{1F418}";
$cherokeeTSV = "\u{13E8}";

print "this is a smiley face: \n$smiley\n";
print "this is an elephant: \n$elephant\n";
print "this is a cherokee TSV: \n$cherokeeTSV\n";
?>
