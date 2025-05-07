<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array In PHP </title>
</head>

<body>

    <?php 
    
    // Indexed Array

    $accessories = [' Phone ', ' Laptop ',' Monitor',' Keyboard' , 'Mouse'];
    
    echo $accessories[0]."<br>";// Print specific variable value by index number.

    foreach ($accessories as $value){
        echo $value. "<br>";
    }
    
    echo "<pre>";
    print_r( $accessories);
    echo "</pre>";
    echo "<br>";

    // Associative array

    $person_data =[
        "name" => "Jon Doe",
        "age"  => "30",
        "profession" => "Designer",
        "designation" => "UI/UX Designer"
    ];

    foreach ($person_data as $key => $value){
        
        echo "$key : => $value <br>";
    }
    
    echo "<pre>";
    print_r( $person_data);
    echo "</pre>";

    //update array
    
    $person_data ["name"] = "Sabuj";
    
    echo "<pre>";
    print_r( $person_data);
    echo "</pre>";

    // Multidimensional Array

    $teams = [
        [   
            "team_name" => "Masud",
            "Works" => "WordPress",
            "team_member" => 6,
        
        ],

        [
            "team_name" => "Uzzal Team",
            "Works" => " SEO & Digital Marting",
            "team_member" => 4,
        ],
        
        [
            "team_name" => "Sagor",
            "Works" => " Shopify & WordPress",
            "team_member" => 8,
        ]
        
        ];

        echo "<pre>";
        print_r( $teams);
        echo "</pre>";
        
        // added new array

        $teams [] =[
            "team_name" => "Sanjidul",
            "Works" => "Graphic Design",
            "team_member" => 7,
        ];

        echo "<pre>";
        print_r( $teams);
        echo "</pre>";

        // delete array items
        
        unset($teams[0]);

        echo "<pre>";
        print_r( $teams);
        echo "</pre>";

        

        
    ?>
</body>

</html>