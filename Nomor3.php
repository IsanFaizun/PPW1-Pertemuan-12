<?php
    $namaDepan = array("i", "s", "a", "n");
    $kota = array(
        "Lampung",
        "Riau",
        "Jambi",
        "Bengkulu",
        "Makassar",
        "Kendari",
        "Gorontalo",
        "Samarinda",
        "Papua",
        "Nusa Tenggara Barat"
    );
    $tempatFix = false;

    for($i = 0; $i < count($namaDepan); $i++){
        for($j = 0; $j < count($kota); $j++){
            $lowerNama = strtolower($namaDepan[$i]);
            $lowerKota = strtolower($kota[$j]);
            if($lowerNama == $lowerKota[0]) {
                echo $lowerKota;
                $tempatFix = true;
                break;
            }
        }
        if ($tempatFix == true){
            break;
        }
    }
    if ($tempatFix == false) {
        echo "Jawa Timur";
    }
?>