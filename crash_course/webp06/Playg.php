<?php
do {
    $password = readline("Enter new password (atleast 8 characters): ");
} while (strlen($password) < 8);

print "Password accepted: $password\n";
// using a while loop
while (true) {
    $input = readline("Enter input: ");
    if ($input === "exit" || $input === "quit") {
        break;
    }
    print "You entered: $input\n";
}
?>
