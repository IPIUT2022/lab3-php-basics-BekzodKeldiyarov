<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Lab 3</h1>
<section class="">
    <h2>First Problem</h2>
    <?php $colors = array('white', 'green', 'red'); ?>
    <?php foreach ($colors

    as $color){ ?>
    <span><?php echo $color . ", ";
        } ?>
        <?php sort($colors);

        ?>
<ul>
    <?php foreach ($colors as $color) { ?>
        <li style="text-transform:uppercase;"><?php echo $color ?> </li>
    <?php } ?>
</ul>
</section>
<section class="">
    <h2>Second Problem</h2>
    <ul>
        <?php
        $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
        asort($ceu);
        foreach ($ceu

        as $country => $capital){

        ?>
        <li>The capital of <?php echo $country . ' is ' . $capital ?>
            <?php } ?>
    </ul>
</section>
<section>
    <h2>Third Problem</h2>
    <?php
    $info = array();
    $text = file_get_contents("input.txt");
    foreach (file("input.txt") as $line) {
        list($key, $value) = explode(' ', $line, 2) + array(NULL, NULL);

        if ($value !== NULL) {
            $info[$key] = $value;
        }
    }
    foreach ($info as $key => $value) { ?>
        Key: "<?php echo $key ?>" Value: "<?php echo $value ?>" <br>
    <?php } ?>
</section>
<section>
    <h2>Last Problem</h2>
    <?php
    $array = array("1", "2", "3", "4", "5");
    echo "<br>Original array <br>";
    foreach ($array as $item) {
        echo $item . " ";
    }
    $pos = 3;
    $insert = '$';
    echo "<br>After inserting '$' the array is: <br>";
    array_splice($array, $pos, 0, $insert);
    foreach ($array as $item) {
        echo $item . " ";
    }
    ?>
</section>
</body>
</html>