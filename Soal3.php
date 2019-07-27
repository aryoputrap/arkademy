<?php
    function cetak_gambar($angka){
        $b = $angka - 1;
        $c = $b / 2;
        $d = $c + 1;
        $a = $d;
        echo "<center>";
        echo "--- panjang ---";
        echo "<br>";
        for ($i=1; $i <= $angka; $i++) {

            for ($j=0; $j < $angka; $j++) {

                if($i == $a){
                    echo "&nbsp * &nbsp";
                }else {
                    if ($j == 0 || $j == ($angka - 1)) {
                        echo "&nbsp * &nbsp";
                    } else {
                        echo "&nbsp = &nbsp";
                    }
                }

            }
            echo "<br>";
        }
        echo "</center>";
    }
    $angka = 5;
    cetak_gambar($angka);
