<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function </title>
</head>
<body>

    <?php
    
    function sayHello(){
        echo " Hello , World <br>";
    }

    sayHello(); //call function

    // Function with Parameters

    function greet ($name){
        echo "Hello , $name <br> ";
    }

    greet("Sabuj");

    function sayHi($name = "Guest"){
        echo " Welcome , $name <br> ";
    }

    sayHi("Tanvir");

    function add($a , $b){
        return $a + $b;
    }

    $result = add(5,5);

    echo $result ."<br>";

    // function with type declarations

    function multiply(int $a , int $b) : int {
        return $a * $b ;
    }

    $result = multiply(10 ,10);
    echo $result ."<br>";
    

    //Common function (String, Number, define)

    echo strlen("Hello!") . "<br>"; // Count charter length 

    echo strtoupper("php") ."<br>";
    echo strtolower("HTML") ."<br>";

    echo substr("Hello, World ", 0,8) ."<br>";
    echo strpos("Hi,World ", "World") ." strpos <br>";
    echo str_replace("world", "PHP","Hello , world") ."<br>";
    

    $str = "  Hello  ";

    echo trim($str) . "<br>";

    // number function

    echo is_numeric("123") ? "Yes":"No" ;

    echo "<br>";

    echo is_numeric("string")? "Yes":"No";

    echo "<br>";

    echo abs (-50) ."<br>"; // transtered nagetive to positive value
    echo abs (-40)."<br>";
    echo abs (-30)."<br>";
    echo abs(-20)."<br>";

    echo round(3.3)."<br>";
    echo round(3.4)."<br>";
    echo round(3.5)."<br>";
    echo round(3.6)."<br>";

    echo round(3.18159 , 2)."<br>";

    echo rand(1, 15)."<br>";
    echo mt_rand(10, 15)."<br>";
    
    echo min(3,5,1,10,4,15,) ."<br>";
    echo max(3,5,1,10,4,15,) ."<br>";

    define("SITE_TITLE","Md Sabuj | Web Developer & WordPress Expert");

    echo SITE_TITLE;

    ?>
    
</body>
</html>