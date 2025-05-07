<?php 
    // User Defined function

    function greetUser($name){
        return "Welcome , $name <br> ";
    }

    echo greetUser("Sabuj");

    // function with default parameters

    function calculateTotl($price, $tax = 0.05){
        $taxAmout = $price * $tax ;

        $total = $price + $taxAmout;

        echo "Price : $price <br>";
        echo "Tax Price : $taxAmout <br> ";
        echo "Total Price : $total <br>";
        
    }

    calculateTotl(300);

    // function return multiple value

    function getUserInfo(){
        return ["name" => "John", "role" => "Admin" ,"age" => 23];
    }

    $user = getUserInfo();
    echo $user ["name"];
    echo "<br>";

    //Returning Array of Calculated Values

    function getStats($numbers){
        $sum = array_sum($numbers);
        $count = count ($numbers);
        $average = $count ? $sum / $count :0;

        return [
            'sum'=>$sum,
            'count' =>$count,
            'average' =>$average
        ];
    }

    $stats = getStats([10,20,50,40,30]);
    echo "Sum : {$stats ['sum']} <br>";
    echo "Count : {$stats ['count']} <br>";
    echo "Average : {$stats ['average']} <br>";

    //Anonymous Function (Closure)

    $message ="Welcome";

    $welcome = function ($name) use ($message){
        return "$message , $name !";
    };

    echo $welcome("Jone")."<br>";

    // Callback with array function

    $numbers = [1,2,3,4];

    $squared = array_map(function($sum){
        return $sum * $sum;
    },$numbers);
    echo "<pre>";
    print_r($squared);
    echo "</pre>";


    // loacal scope

    function testLocal(){
        $newMessage ="Hello form inside"; //local variable
        echo $newMessage ;
    }

    testLocal();

    // echo $newMessage; // Undefined variable // show this message because of this local vairabele can't accessable outsie of the funtion

    //golbal scope

    $siteName = "MySite";

    function ShowName(){

        global $siteName;//To use a global variable inside a function, use the global keyword
        echo $siteName;
    }

    showName();


?>