<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>

    <?php
        echo "<h3> Soal 1 </h3>";
    /*
        SOAL NO 1
    Kelompokkan nama-nama di bawah ini ke dalam Array.
    Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"
    Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray"
    */
    
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    print_r($kids);
    echo "<br>";
    $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
    print_r($adults);

    echo "<h3> Soal 2</h3>";
    /*
        SOAL NO 2
    Tunjukkan panjang Array di Soal No 1 dan tampilkan isi
    dari masing-masing Array.
    */
    
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " ; echo count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    // Lanjutkanecho "</ol>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";
    echo "</ol>";
    echo "<br>";
    echo "Total Adults: " ; echo count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    // Lanjutkan
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";
    echo "</ol>";
    
    /*
        SOAL No 3
    Susun data-data berikut ke dalam bentuk Asosiatif Array
        (Array Multidimensi)
    Name: "Will Byers"
    Age: 12,
    Aliases: "Will the Wise"
    Status: "Alive"
    
    Name: "Mike Wheeler"
    Age: 12,
    Aliases: "Dungeon Master"
    Status: "Alive"

    Name: "Jim Hopper"
    Age: 43,
    Aliases: "Chief Hopper"
    Status: "Deceased"

    Name: "Eleven"
    Age: 12,
    Aliases: "El"
    Status: "Alive"
    */

    $siswa1 = [ 
        "Name" => "Will Byers",
        "Age" => 12,
        "Aliases" => "Will the Wise",
        "Status" => "Alive"
    ];
        //mencetak isi array asosiatif
    echo "<p>".$siswa1["Name"]."</p>";
    echo "<p>".$siswa1["Age"]."</p>";
    echo "<p>".$siswa1["Aliases"]."</p>";
    echo "<p>".$siswa1["Status"]."</p>";
    echo "<hr>";
    echo "<pre>";
    print_r($siswa1);
    echo "</pre>";
    echo "<hr>";
    echo "<br>";

    $siswa2 = [ 
        "Name" => "Mike Wheeler",
        "Age" => 12,
        "Aliases" => "Dungeon Master",
        "Status" => "Alive"
    ];
        //mencetak isi array asosiatif
    echo "<p>".$siswa2["Name"]."</p>";
    echo "<p>".$siswa2["Age"]."</p>";
    echo "<p>".$siswa2["Aliases"]."</p>";
    echo "<p>".$siswa2["Status"]."</p>";
    echo "<br>";
    echo "<hr>";
    echo "<pre>";
    print_r($siswa2);
    echo "</pre>";
    echo "<hr>";

    $siswa3 = [ 
        "Name" => "Jim Hopper",
        "Age" => 43,
        "Aliases" => "Chief Hopper",
        "Status" => "Deceased"
    ];
        //mencetak isi array asosiatif
    echo "<p>".$siswa3["Name"]."</p>";
    echo "<p>".$siswa3["Age"]."</p>";
    echo "<p>".$siswa3["Aliases"]."</p>";
    echo "<p>".$siswa3["Status"]."</p>";
    echo "<br>";
    echo "<hr>";
    echo "<pre>";
    print_r($siswa3);
    echo "</pre>";
    echo "<hr>";

    $siswa4 = [ 
        "Name" => "Eleven",
        "Age" => 12,
        "Aliases" => "El",
        "Status" => "Alive"
    ];
        //mencetak isi array asosiatif
    echo "<p>".$siswa4["Name"]."</p>";
    echo "<p>".$siswa4["Age"]."</p>";
    echo "<p>".$siswa4["Aliases"]."</p>";
    echo "<p>".$siswa4["Status"]."</p>";
    echo "<br>";
    echo "<hr>";
    echo "<pre>";
    print_r($siswa4);
    echo "</pre>";
    echo "<hr>";
    ?>
    
</body>
</html>