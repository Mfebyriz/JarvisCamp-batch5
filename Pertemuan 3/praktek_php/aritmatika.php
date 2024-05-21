<?php
// Aritmatika
$nilai1 = 10;
$nilai2 = 3;

echo "$nilai1 x $nilai2 = ". $nilai1 * $nilai2;
echo "<br>";

echo "$nilai1 + $nilai2 = ". $nilai1 + $nilai2;
echo "<br>";

echo "$nilai1 / $nilai2 = ". $nilai1 / $nilai2;
echo "<br>";

echo "$nilai1 - $nilai2 = ". $nilai1 - $nilai2;
echo "<br>";

echo "$nilai1 % $nilai2 =". $nilai1 % $nilai2;

echo "<br>";

// Operator Pembanding dan kondisional
$nilai3 = 5;
$nilai4 = "5";

if ($nilai3 == $nilai4) {
    echo "Nilai3 sama dengan Nilai4";
} else {
    echo "Tidak diketahui";
}
echo "<br>";

if ($nilai1 > $nilai2) {
    echo "Nilai1 lebih besar dari Nilai2";
} elseif ($nilai1 < $nilai2 ) {
    echo "Nilai1 lenih kecil dari Nilai2";
}
echo "<br>";

$day = date('D');
echo "Hari ini adalah $day ";
if ($day == "Sat") {
    echo "kelas Jarvis dimulai!";
} elseif ($day == "Sun") {
    echo "kelas Jarvis dimulai!";
} else {
    echo "kelas libur!";
}
?>