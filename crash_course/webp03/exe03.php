<?php
// 1
$name = "clojure";
print $name . " is learning PHP\n";
echo "\n";

// Question 2 and 4
$fruit = "apple";

$fact = <<<END

    $fruit juice is made from {$fruit}s.

END;

print ucfirst(ltrim($fact)) . "\n";

$fact = str_replace("apple", "orange", $fact);

print ucfirst(ltrim($fact)) . "\n";

$happyMessage = <<<EOL

PHP is fun!
\u{1F60A}
\u{1F60E}
\u{1F642}

EOL;

print $happyMessage;

?>
