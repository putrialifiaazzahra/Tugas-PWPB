<?php
echo "<h2>Perhitungan Keliling dan Luas Bangun Datar </h2>";
echo "<hr>";

// Persegi Panjang
echo "<p>1. Diketahui bangun datar <b>persegi panjang</b> dengan panjang 10cm dan lebar 5cm. 
        Hitung Luas Dan Kelilingnya!</p>";

$ppp = 10; // panjang persegi panjang
$lpp = 5; //lebar persegi panjang

$lupp = $ppp * $lpp; // panjang x lebar
$kelpp = 2 * ($ppp + $lpp); // 2 x (panjang + lebar)

echo "Hasil hitung : ";
echo "<br>";
echo "Luas persegi panjang = ".$lupp."cm";
echo "<br>";
echo "Keliling persegi panjang = ".$kelpp."cm";
echo "<br>";
echo "<br>";
echo "<hr>";

// Persegi / Kotak
echo "<p>2. Diketahui bangun datar <b>persegi</b> dengan sisi 6cm. 
        Hitung Luas Dan Kelilingnya!</p>";

$sp = 6; // sisi

$lup = $sp ** 2; // sisi x sisi
$kelp = 4 * $sp; // 4 x sisi

echo "Hasil hitung : ";
echo "<br>";
echo "Luas persegi = ".$lup."cm";
echo "<br>";
echo "Keliling persegi = ".$kelp."cm";
echo "<br>";
echo "<br>";
echo "<hr>";

// Lingkaran
echo "<p>3. Diketahui <b>lingkaran</b> jari-jarinya 14cm. 
        Hitung Luas Dan Kelilingnya!</p>";

$jari = 14; // jari-jari
$phi = 22/7; // nilai konstanta

$ll = $phi * $jari ** 2; // Phi x r x r
$kell = 2 * $phi * $jari; // 2 x phi x r

echo "Hasil hitung : ";
echo "<br>";
echo "Luas lingkaran = ".$ll."cm";
echo "<br>";
echo "Keliling lingkaran = ".$kell."cm";
echo "<br>";
echo "<br>";
echo "<hr>";

// Belah ketupat
echo "<p>4. Diketahui bangun datar <b>belah ketupat</b> dengan panjang diagonalnya 12cm dan 14cm dan setiap sisi nya 6cm. 
        Hitung Luas Dan Kelilingnya!</p>";

$d1 = 12; // diagonal 1
$d2 = 14; // diagonal 2
$sbk = 6; // sisi belah ketupat

$lbk = 1/2 * $d1 * $d2; // 1/2 x diagonal1 x diagonal2
$kelbk = 4 * $sbk; // 2 * phi * r

echo "Hasil hitung : ";
echo "<br>";
echo "Luas lingkaran = ".$lbk."cm";
echo "<br>";
echo "Keliling lingkaran = ".$kelbk."cm";
echo "<br>";
echo "<br>";
echo "<hr>";

// Layang-layang
echo "<p>5. Diketahui <b>layang-layang</b> dengan panjang sisi a 10cm, sisi b 25cm, 
    serta panjang diagonalnya 15cm dan 20cm. Hitung Luas Dan Kelilingnya!</p>";

$a = 10; // sisi a
$b = 25; // sisi b
$di1 = 15; // diagonal 1
$di2 = 20; // diagonal 2

$lly = 1/2 * $di1 * $di2; // 1/2 x diagonal1 x diagonal2
$klly = 2 * ($a + $b); // 2 x (sisi a + sisi b)

echo "Hasil hitung : ";
echo "<br>";
echo "Luas lingkaran = ".$lly."cm";
echo "<br>";
echo "Keliling lingkaran = ".$klly."cm";
echo "<br>";
echo "<br>";
echo "<hr>";
?>