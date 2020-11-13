<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 5</title>
</head>

<body>
    <h1>Write a PHP script named array3.php to print "second" and Red From the following array</h1>
    <h2>Sample Data:</h2>
    <h3>$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
        "holes" => array ( "First", 5 => "Second", "Third"));</h3>
    <hr>

    <?php

    $color = array(
        "color" => array("a" => "Red", "b" => "Green", "c" => "White"),
        "numbers" => array(1, 2, 3, 4, 5, 6),
        "holes" => array("First", 5 => "Second", "Third")
    );

    echo $color["color"]["a"], "</br>", $color["holes"][5];
    //---------------------------------------------------

    //$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 8 => 'yellow');

    // $teste1 = array_search("$name", $array);

    //$result = array_search("$name", $color);

    /* $teste2 = array("red", "blue", "green", "yellow"); 
    if (in_array("$name", $teste2)) {
        echo "$name";
    }
    

    $array = array("b" => 'blue', "r" => 'red', "g" => 'green', "y" => 'yellow');
    $result = array_search("$name", $array);

    echo $result;
    */
    ?>


</body>

</html>