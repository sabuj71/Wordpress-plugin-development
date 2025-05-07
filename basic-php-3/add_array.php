<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Array </title>
</head>

<body>

    <?php 

        // Index array
    
        $fruits = array("Apple", "Banana", "Cherry");
        $fruits [] ="Orange";   // add array
        
        
        echo "<pre>";
        var_dump($fruits);
        echo "</pre>";

        // add multiple value
        
        array_push($fruits,"Kiwi", "Lemon");
        
        echo "<pre>";
        var_dump($fruits);
        echo "</pre>";

        // Associative array

        $cars = array("brand" => "Ford", "model" => "Mustang");

        // $cars ["year"]=2025;
        // $cars ["color"]="Sky-Blue";
        $cars +=["color" => "Sky-Blue", "year" => 2025];

        echo "<pre>";
        var_dump($cars);
        echo "</pre>";
    ?>
</body>

</html>