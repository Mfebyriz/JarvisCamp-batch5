<!-- Penulisan Sintaks PHP -->
<?php
    echo "Hello World!";
    echo "<br>";

// Variabel
    $_nama = "Feby";
    $_Nama = "Rizki";
    echo 'Nama Saya ' . $_Nama;
    echo "<br>";

// Tipe Data
    /** integer */
    echo 1234;
    echo "<br>";

    /** string */
    echo "saya kelas 5A";
    echo "<br>";

    /** array */
    $array = ['Geral', 'Fajir', 'Ukul'];

    echo $array[0];
    echo "<br>";

    $array2 = [
        "nama" => "Riz",
        "alamat" => "Depok",
    ];

    echo $array2['alamat'];
    echo "<br>";
?>