<?php
// Function Angka Ganjil
function ganjil($pertama1, $terakhir1) {
    for ($pertama1; $pertama1 <= $terakhir1 ; $pertama1++) {
        if ($pertama1 % 2 == 1) {
            echo "Angka ganjil adalah = ". $pertama1;
            echo "<br>";
        }
    }
}
echo ganjil("1", "10");
echo "<br>";

//Function Angka Genap
function genap($pertama2, $terakhir2) {
    for ($pertama2; $pertama2 <= $terakhir2 ; $pertama2++) {
        if ($pertama2 % 2 === 0) {
            echo "Angka genap adalah = ". $pertama2;
            echo "<br>";
        }
    }
}
echo genap("0", "10");
echo "<br>";

// Function Aritmatika
/** Ditambah */
function tambah($angka1, $angka2) {
    $h1 = $angka1 + $angka2;
    return "$angka1 + $angka2 = $h1";
}
echo tambah("5", "10");
echo "<br>";

/** Dikurang */
function kurang($angka1, $angka2) {
    $h1 = $angka1 - $angka2;
    return "$angka1 - $angka2 = $h1";
}
echo kurang("5", "10");
echo "<br>";

/** Dikali */
function kali($angka1, $angka2) {
    $h1 = $angka1 * $angka2;
    return "$angka1 x $angka2 = $h1";
}
echo kali("5", "10");
echo "<br>";

/** Dibagi */
function bagi($angka1, $angka2) {
    $h1 = $angka1 / $angka2;
    return "$angka1 / $angka2 = $h1";
}
echo bagi("5", "10");
echo "<br>";

?>