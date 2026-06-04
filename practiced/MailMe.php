
<?php
$to = getInput("Enter recipient email: ");
$subject = getInput("Enter subject: ");
$message = getInput("Enter message: ");

var_dump(mail($to, $subject, $message));

function getInput(string $prompt): string
{
    echo $prompt;
    return trim(fgets(STDIN));
}

