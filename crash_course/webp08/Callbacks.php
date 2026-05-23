<?php
$nums = [1, 2, 3, 4, 5];
array_walk($nums, fn(int $num) => print "$num ");
print "\n";
print_r(
    array_map(function (int $num) {
        return $num * 2;
    }, $nums),
);

// Exercise: 1
$nameWithHeight = [
    "Fred" => 1.82,
    "Joelle" => 1.55,
    "Robin" => 1.7,
];

foreach ($nameWithHeight as $name => $height) {
    print str_pad($name, 8) . " $height\n";
}

// Exercise: 2
$movies = [
    [
        "title" => "Back to the Future",
        "duration" => 116,
        "leadingActor" => "Micheal J. Fox",
    ],
    [
        "title" => "The Fifth Element",
        "duration" => 126,
        "leadingActor" => "Bruce Willis",
    ],
    [
        "title" => "Alien",
        "duration" => 117,
        "leadingActor" => "Sigourney Weaver",
    ],
];

print_r($movies);
// using foreach to iterate over the movies
foreach ($movies as $movie) {
    $title = $movie["title"];
    $duration = $movie["duration"];
    $leadingActor = $movie["leadingActor"];
    print "$title\n";
    print "\tDuration $duration\n";
    print "\tLeading Actor $leadingActor\n";
}

// Exercise: 3
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

//separate the numbers into odd and evens
$splitToEvenAndOdd = array_reduce(
    $numbers,
    function ($acc, $num) {
        if ($num % 2 == 0) {
            $acc["even"][] = $num;
        } else {
            $acc["odd"][] = $num;
        }
        return $acc;
    },
    ["even" => [], "odd" => []],
);

print_r($splitToEvenAndOdd);
// can also use array_merge to combine the even and odd arrays
$combined = [...$splitToEvenAndOdd["even"], ...$splitToEvenAndOdd["odd"]];
print_r($combined);
sort($combined);
print_r($combined); // print the sorted combined array
?>
