<?php
    echo "
        <marquee>
            <h1>INDRA LESMANA - XI RPL 2</h1>
        </marquee>

    ";

    $nama = "Indra Lesmana";
    $kelas = "XI RPL 2";
    $nilai = 82.58;

    //variable
    echo "nama : " . $nama;
    echo "<br>";
    echo "kelas : " . $kelas;
    echo "<br>";
    echo "nilai : $nilai";
    echo "<br>";

    // Operator Jumlah
    echo "<br><br>";
    $angka1 = 5;
    $angka2 = 10;

    $hasil = $angka1 + $angka2;
    echo "Hasil dari penjumlahan : $hasil";

    // Rumus Luas Segitiga
    echo "<br><br>";
    $alas = 8;
    $tinggi = 20;

    $rumus = 0.5 * $alas * $tinggi;
    echo "Hasil rumus ; $rumus";

    // Rumus Luas Lingkaran
    echo "<br><br>";
    $phi = 3.14;
    $r = 7;
    // luas ling : phi x r x r
    $rumus = $phi * $r * $r;
    echo "Hasil Luas Lingkaran : $rumus";

    //Rumus Volume Balok
    // V =  p x l x t
    // p = 2, l = 5, t = 10;
    echo "<br><br>";
    $p = 10;
    $l = 5;
    $t = 10;

    $rumus = $p * $l * $t;
    echo "Hasil Volume Balok : $rumus";
?>