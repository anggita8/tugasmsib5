<?php
require_once 'Bentuk2D.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(7);
$persegiPanjang = new PersegiPanjang(5, 10);
$segitiga = new Segitiga(6, 8);

$data = array(
    array("No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang"),
    array(1, $lingkaran->namaBidang(), "Jari-Jari: 7", $lingkaran->luasBidang(), $lingkaran->kelilingBidang()),
    array(2, $persegiPanjang->namaBidang(), "Panjang: 5, Lebar: 10", $persegiPanjang->luasBidang(), $persegiPanjang->kelilingBidang()),
    array(3, $segitiga->namaBidang(), "Alas: 6, Tinggi: 8", $segitiga->luasBidang(), $segitiga->kelilingBidang())
);

echo "<table border='1'>";
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>