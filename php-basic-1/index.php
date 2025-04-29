<?php 

// Writing your first PHP script

    echo "Hello world";   // Faster , Can output multiple values

    echo "<br>"; // Every statement end of semi-clone(;)

    // Variables

    $name ="Sabuj"; // variable start $(dollor sign ) and Case-sensitive and variable can't start number
    
    // Data Type 
    // String

    $name = "Sabuj";
    $greeting =' Hello , ' . $name ; // On the single quote can't driect call the variable 

    echo $greeting;
    echo "<br>";

    //Integer

    $age =23;
    $year = 2025;

    echo " I am $age years old and carrents years continue $year <br>";
    
    echo $age +5 ."<br>";   //28 additions

    // Float 

    $pirce = 11.11;
    $pi = 3.1415;

    echo "Sum of Two Number = ". $pi + $pirce ."<br>" ;

    // Boolean 

    $isLoggedIn = true;
    $isAdmin = false;

    if($isLoggedIn){
        echo "Welcome ! " ."<br>" ;
    }

    // Array

    $person =["Sabuj", 23];

    echo "Your name is $person[0]? and you are $person[1] years old! <br>";

    // object 

    class Color{
       public $favoriateColor ="Blue";
    }

    $obj = new Color();

    echo "My Favorite color is ". $obj->favoriateColor ."<br>";

    // Null 

    $x = null;
    $y ; // uninitialized is aslo considered null

    var_dump($x);

    // Resource

    $file_name= fopen("index.html","r");
    var_dump($file_name);


?>