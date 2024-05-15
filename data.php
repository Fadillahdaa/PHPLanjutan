<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data </title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Data </h1>

    <?php
    $people = [
        ["nama" => "Lee Jeno", "umur" => 24],
        ["nama" => "Jung Jaehyun", "umur" => 27],
        ["nama" => "Park Chanyeol", "umur" => 32],
        ["nama" => "Na Jaemin", "umur" => 23],
        ["nama" => "Kim Jong In", "umur" => 30],
        ["nama" => "Lee Taeyong", "umur" => 29],
        ["nama" => "Watanabe Haruto", "umur" => 20],
        ["nama" => "Huang Renjun", "umur" => 24],
        ["nama" => "Lee Haechan", "umur" => 23],
        ["nama" => "Oh Sehun", "umur" => 30],
        ["nama" => "Zhong Chenle", "umur" => 22],
        ["nama" => "Park Jisung", "umur" => 21],
        ["nama" => "Lee Mark", "umur" => 25],
        ["nama" => "Do Kyung Soo", "umur" => 31],
        ["nama" => "Hwng Hyunjin", "umur" => 24]
    ];

    $jsonData = json_encode($people);

    $peopleArray = json_decode($jsonData, true);
    if (!empty($peopleArray)) {
        echo "<table>";
        echo "<tr><th>Nama</th><th>Umur</th></tr>";
        foreach ($peopleArray as $person) {
            echo "<tr><td>{$person['nama']}</td><td>{$person['umur']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No data found</p>";
    }
    ?>

</body>
</html>
