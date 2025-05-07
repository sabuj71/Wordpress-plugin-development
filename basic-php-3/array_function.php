<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Funtion</title>
</head>

<body>

    <?php 
    
    // count array 

    $fruits = ["Apple", "Banana","Orange"];
    
    echo "Count Fruits :-" . count($fruits) ."<br>";

    $person =[
        "name " => "John",
        "age" => 30,
        "city" => "New York",
        "gender" =>"Male"
    ];

    echo "Count person data :-" . count($person)."<br>";

    $data =[
        ["a","b"],
        ["c","d"],
        ["e","f"],
    ];

    echo "Count Multidimensional arry items ". count($data) ."<br>";
    echo "Count Multidimensional arry items ". count($data, COUNT_RECURSIVE) ."<br>";

    // array value
    echo "<pre>";
    var_dump(array_values($person))."<br>";
    echo "</pre>";
    

    // array key
    
    echo "<pre>";
    var_dump(array_keys($person))."<br>";
    echo "</pre>";

    // in array

    $color =["red", "green", "blue"];

    if (in_array("red", $color)){
        echo "Color Exists !";
    }else {
        echo "Color is not Exists !";
    }

    // array key exists

    $user = ["username" => "john_doe", "email" => "john@example.com"];
    
    
    if (array_key_exists("email", $user)) {
        echo "Email key found!";
    }

    
    ?>


</body>

</html>