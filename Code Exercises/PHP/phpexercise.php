<!DOCTYPE html>
<html>

<head>
    <title>
        PHP Example
    </title>
</head>

<body>

    <?php
        $characterName = "James";
        $characterAge = 80;

        echo "There was once a man named $characterName <br>";
        echo "He was $characterAge years old <br>";
        echo "He really liked the name $characterName <br>";
        echo "But didn't like being $characterAge <br>";
?>
    <hr>

    <?php
    $phrase = "To be or not to be"; // Plain text = String
    $age = 30; // Integer (whole number)
    $weight = 205.8; // floating point number - decimal number - floats
    $isMale = true; // Boolean = true or false data
    // null = Means no value
    echo $phrase;
?>
    <hr>

    <?php
    $phrase2 = "Elephant Store";
    $phrase2[1] = "H";
    $phrase3 = "Dog";
    $phrase4 = "Shaun";

    echo strtolower ($phrase2);
    echo strtoupper ($phrase3); 
    echo strlen ($phrase4); 
    echo $phrase2[1];
    echo str_replace("Elephant", "Panda", $phrase2);

?>




</body>

</html>