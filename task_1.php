<?php 
$text = "The quick brown fox jumps over the lazy dog.";

function manipulateText($inputText) {
    global $text;
    $lowercaseText = strtolower($inputText);
    $newreplace = str_ireplace("brown","red",$text);
    $results = [
        "Lowercase Text" => $lowercaseText,
        "Replace Text" =>  $newreplace,
    ];
    
    return $results;
}
$results = manipulateText($text);
foreach ($results as $label => $result) {
    echo "$label: $result \n\n";
}
