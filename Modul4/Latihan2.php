<?php
    function luas_lingkaran ($jari) {
        return 3.14 *$jari * $jari;
    }
    // penampilan fungsi 
    $r = 10;
    echo "Luas lingkaran dengan jari-jari $r = ";
    echo luas_lingkaran($r);

    function head() {
        echo '
        <link rel="Stylesheet" type="text/css" href="style/style.css">
        <link rel="Stylesheet" type="text/css" href="style/font-awesome.css">';
    }
    // pemanggilan fungsi
    echo luas_lingkaran($r);
?>