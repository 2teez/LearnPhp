<?php
$age = 21;
$weight = 80;

$message = <<<EOT
My age is $age
my weight is {$weight}kg.

EOT;

print $message;

print <<<TEXT
    If the closing delimiter is not on a new line,
    it must be followed by a semicolon.

TEXT;

$anotherMessage = <<<END
I'm the same indent as the ending delimiter. (4 spaces)
  I have 2 extra spaces
  So have I!
I'm back at the base indent.

END;

print $anotherMessage;

?>
