<?php

$array = array();
//print_r($array);

$array_name = array("Kelly", "Mahomes", "Williams");
//print_r($array_name);
//var_dump($array_name);

//echo($array_name['2']);

$array_name[] = "Hill";

$array_name[4] = "Reid";
//print_r($array_name);

for ($i = 0; $i < 10; $i++){
    $newAry[] = random_int(0, 100);
}

// for ($i = 0; $i < count($newAry); $i++)
// {
//     echo "$newAry[$i] \n";
// }

// foreach($newAry as $value)
// {
//     echo $value . "\n";
// }

//associative array
$tax_rate = array("hawaii" => 4.25, "Ca" => 8.25);
print_r($tax_rate);

foreach($tax_rate as $key => $values)
{
    echo $key . " : " . $values . "\n";
}

echo $tax_rate["hawaii"];