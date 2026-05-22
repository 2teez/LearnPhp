<?php
do {
    $password = readline("Enter new password (atleast 8 characters): ");
} while (strlen($password) < 8);

print "Password accepted: $password\n";
?>
