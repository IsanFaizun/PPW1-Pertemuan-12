<?php
$nama = "isan";
$tanggal = date("d");
$lenNama = strlen($nama);

if ($tanggal - 2 == $lenNama) {
    echo "berhasil";
} elseif ($tanggal > $lenNama) {
    echo "sedikit lagi";
} else {
    echo "coba lagi";
}
?>