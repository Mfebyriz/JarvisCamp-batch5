<?php
$products = [ ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
            ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
            ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
            ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
            ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30] ];
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
        <table>
            <th align='left' style='font-size:30px'>Daftar Produk</th>
        </table>
        <table rules='rows' width='100%' cellpadding=10 align='center'>
            <th align="left">Barang</th>
            <th align="left">Harga</th>
            <th align="left">Deskripsi</th>
            <th align="left">Stok</th>
            <?php foreach ($products as $hasil) { ?>
            <tr>
                <td><?= $hasil['barang'] ?></td>
                <td><?= $hasil['Harga'] ?></td>
                <td><?= $hasil['Deskripsi'] ?></td>
                <td><?= $hasil['Stok'] ?></td>
            </tr>
        <?php } ?>
            <tr>
                <td><?= $_POST['barang'] ?></td>
                <td><?= $_POST['Harga'] ?></td>
                <td><?= $_POST['Deskripsi'] ?></td>
                <td><?= $_POST['Stok'] ?></td>
            </tr>
        </table>
<?php
} else {
    header("location: tugas4-form.php");
}
?>