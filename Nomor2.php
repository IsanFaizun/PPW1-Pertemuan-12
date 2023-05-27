<?php
$anggota = array(
    array("si A", 495000),
    array("si B", 495001),
    array("si C", 495002),
    array("si D", 495003),
    array("si E", 495004));

    for($i = 0; $i < count($anggota); $i++){
        if($anggota[$i][1] % 2 == 0) {
            $peran = "Back-end Developer";
        } else {
            $peran = "Front-end Developer";
        }
        echo "Nama : " . $anggota[$i][0] . "<br>";
        echo "Peran : " . $peran . "<br><br>";
        echo "<hr>";
    }
?>