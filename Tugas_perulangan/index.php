<?php 
echo "<h2>1. Looping While</h2>";
echo "LOOPING PERTAMA";
echo "<br>";

$a = 2;

while ($a <= 20) {
    echo "$a - I love coding <br>";
    $a+=2;                  
}

echo "<br>";

echo "LOOPING KEDUA";
echo "<br>";

$x = 20;

while ($x >= 2) {
    echo "$x - I will become a mobile developer <br>";
    $x-=2;                  
}

echo "<h2>2. Looping For</h2>";

for ($d = 1; $d <= 20 ; $d++) { 
   if ($d % 2 == 0) {
       echo "$d - Taruna Bhakti <br>";
   } elseif ($d % 3 == 0) {
       echo "$d - I love coding <br>";
   }else {
       echo "$d - RPL <br>";
   }
}


echo "<h2>3. Looping Foreach</h2>";

$products = [
    ['name' => 'shiny star', 'price' => 20, 'stock' => 10],
    ['name' => 'green shell', 'price' => 10, 'stock' => 20],
    ['name' => 'red shell', 'price' => 15, 'stock' => 15],
    ['name' => 'gold coin', 'price' => 5, 'stock' => 12],
    ['name' => 'lightning bolt', 'price' => 40, 'stock' => 8],
    ['name' => 'banana skin', 'price' => 2, 'stock' => 5]
];

foreach ($products as $data) {
    echo $data['name']." - ";
    echo $data['price']." - ";
    echo $data['stock'];
    echo "<br>";
}
?>
