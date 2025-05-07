<?php 

    echo strlen( "Hello World"); // out -> 11 //	Length of a string
    
    echo "<br>";

    echo strtoupper("sabuj"); // Output -> SABUJ  //Converts to uppercase
    echo "<br>";
    echo strtolower("SABUJ");  // output -> sabuj  //Converts to lowercase
    echo "<br>";

    echo  substr("Hello World",0,5); //Extract part of a string
    echo "<br>";

    echo strpos("Hi,Jone!","Jone!"); //Find position of a substring
    echo "<br>";
    echo str_replace("Hello","Hi","Hello , Your name is Jone");
    echo "<br>";
    echo trim (" Hi !  ");
    echo "<br>";

    //Number Functions

    echo "Absolute Value :". abs(-5492);
    echo "<br>";

    echo "Round Number : " . round(2.9);
    echo "<br>";

    echo "Round down : " . floor(2.9);
    echo "<br>";
    echo "Round up : " . ceil(2.9);
    echo "<br>";
    echo "Rand Number : " .rand(1,20);
    echo "<br>";

    echo "Maximimum Value :".max( 1,3,9,5,50,10,8,30);
    echo "<br>";
    echo "Minimum Value :".min( 1,3,9,5,50,10,8,30);

    // Define 

    define ("SITE_TITLE","Gadgets 4U – Your Ultimate Electronics Hub");

?>