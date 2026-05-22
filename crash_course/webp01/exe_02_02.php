<?php
$age = 21;
print var_dump($age);
echo "Setting age to null\n";
$age = null;
print var_dump($age);
echo "Unsetting age\n";
unset($age);
print var_dump($age);
?>
