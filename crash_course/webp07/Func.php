<?php

function getUserInput(string $prompt): string
{
    do {
        print $prompt . ": ";
        $output = fgets(STDIN);
    } while (!$output);
    return trim($output);
}
?>
