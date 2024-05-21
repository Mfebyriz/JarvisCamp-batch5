<?php
$fruit = [1,2,3,5];
// print_r ($fruit);
$fruit["0"] = "Hijau";
$fruit["2"] = "Hijau";
print_r ($fruit);

echo "<br>";
// Menghitung total data di array
echo count($fruit);
echo "<br>";

// menambahkan data di akhir array
array_push($fruit, "Mangga", 'Apple');
print_r($fruit);
echo "<br>";

// cek data di array
var_dump(in_array("Hijau", $fruit));
echo "<br>";

$last = array_pop($fruit);
print_r($fruit);
echo "<br>";
echo "$last";
echo "<br>";

// unset($fruit);
unset($fruit);
print_r($fruit);
echo "<br>";
echo $_SERVER['HTTP_HOST'];
?>