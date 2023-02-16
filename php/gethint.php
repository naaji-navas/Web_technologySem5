<?php
// Array with names
$names = array("Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda", "Hege", "Inga", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda", "Raquel", "Cindy", "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni", "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky");

// Get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// Lookup all names from array if input string is not empty
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($names as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output suggestion or "no suggestion" if no names were found
echo $hint === "" ? "no suggestion" : $hint;
