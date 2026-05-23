<?php
$file = __DIR__ . "/data.txt";
$content = file_get_contents($file);
print $content;

$employeesData = [
    [
        "name" => "miami",
        "age" => 30,
        "position" => "developer",
    ],
    ["name" => "lagos", "age" => 35, "position" => "tester"],
];
// check for the directory called data
// if it doesn't exist, create it
$dirPath = __DIR__ . "/data";
if (!file_exists($dirPath)) {
    mkdir($dirPath);
}
$jsonEmployeeFile = $dirPath . "/employee.json";
$fileHandler = null;
if (!file_exists($jsonEmployeeFile)) {
    touch($jsonEmployeeFile);
    $fileHandler = fopen($jsonEmployeeFile, "w");
} else {
    $fileHandler = fopen($jsonEmployeeFile, "a");
}
file_put_contents($jsonEmployeeFile, json_encode($employeesData));
fclose($fileHandler);
// read it back
print_r(file_get_contents($jsonEmployeeFile));
print "\n";
//
$fileHandler = fopen($jsonEmployeeFile, "r");
$content = fread($fileHandler, filesize($jsonEmployeeFile));
print_r(json_decode($content, true));
fclose($fileHandler);

// delete the employee.json file
unlink($jsonEmployeeFile);
// delete the data directory
rmdir($dirPath);
