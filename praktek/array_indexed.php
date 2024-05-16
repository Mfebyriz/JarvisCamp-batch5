<?php
$array = [1,2,3,4,5];

echo $array[1];
echo "<br><pre>";
print_r($array);
echo "</pre>";

// array associative
$umur = ["Feby" => 20, "alex" => 10];
echo "<br><pre>";
// print_r($umur);
echo "</pre>";

foreach ($umur as $nama => $umur) {
    echo "Namanya : $nama <br> Umurnya : $umur <br>";
}

$buah =[
    ["nama" => "apel", "warna" => "merah"],
    ["nama" => "mangga", "warna" => "hijau"],
    ["nama" => "pisang", "warna" => "kuning"]
];
echo "<br><pre>";
// print_r($buah);
echo "</pre>";
?>

<table border="2">
    <tr>
        <th> Nama </th>
        <th> Warna </th>
    </tr>
     <?php foreach ($buah as $buah2) { ?>
        <tr>
            <td><?php echo $buah2['nama'] ?></td>
            <Td><?= $buah2['warna'] ?></Td>
        </tr>
     <?php } ?>
</table>