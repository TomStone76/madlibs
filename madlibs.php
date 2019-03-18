<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Madlibs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>

<form action="madlibs.php" method="get">
    Color: <input type="text" name="color"> <br>
    Plural noun: <input type="text" name="pluralNoun"> <br>
    Celebrity: <input type="text" name="color"> <br>
    <input type="submit">
</form>
<br><br>

<?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $color, <br>";
    echo "$pluralNoun are blue, <br>";
    echo "I love $celebrity. <br>";
?>

    
</body>
</html>