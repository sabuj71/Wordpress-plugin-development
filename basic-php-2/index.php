<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP </title>
</head>
<body>
    <?php 
    
        //Operators and Expressions

        //Arithmetic Opreators :
        
        $a = 10 ;
        $b =3;

        echo "Addition two number = ". $a + $b . "<br>" ;
        echo "Subtraction two number = ". $a - $b . "<br>" ;
        echo "Multiplication two number = ". $a * $b . "<br>" ;
        echo "Division two number = ". $a / $b . "<br>" ;
        echo "Modulus two number = ". $a % $b . "<br>" ;
        echo "Exponentiation two number = ". $a ** $b . "<br>" ;

        echo " =================== <br> ";

        //Assingment

        $x =10;
        $y = 20;

        $x += $y;
        
        echo $x . "<br>";

        $x -= $y;

        echo $y . "<br>";

        echo " =================== <br> ";

        //Comparison

        $a = 5;
        $b = "5";

        var_dump( $a == $b)."<br>"; // == check only value // true
        var_dump( $a ===  $b) ."<br>"; // === check value and type both //false
        var_dump( $a != $b)."<br>"; // value not equal 

        echo "<br> =================== <br> ";

        // Logical 

        $x = 50 ;
        $y = 30 ;

        if($x> 40 && $y< 20){
            echo "This conditions is true ";
        }else{
            echo "This contitions is false";
        }

        echo "<br>";

        if ( $x = 40 || $y = 30){
            echo "This conditions is true ";
        }else{
            echo "This contitions is false";
        }
        
        echo "<br> =================== <br> ";
        //Control Structures (if, else, switch)

        // if statement

         $age =15;

         if ( $age<18){
            echo "You are not adult <br> ";
         }

        // if else statement 

        $age = 20;

        if($age >=18){
            echo "You are adult";
        }else{
            echo "You are not adult";
        }

        echo "<br>";

        // if else if else 

        $marks = 44;

        if($marks <= 100 && $marks >= 90){
            echo "Grade A+ ";
        } else if ($marks <= 89 && $marks >= 80){
            echo "Grade A ";
        } else if ($marks <= 79 && $marks >= 70){
            echo "Grade B";
        } else if ($marks <= 69 && $marks >= 60){
            echo "Grade C";
        } else if ($marks <= 59 && $marks >= 50){
            echo "Grade D";
        } else {
            echo "You are failed, try again.";
        }

        echo "<br>";

        // Switch Statements 

        $day ="Sunday";

        switch ($day){
            case "Monday":
                echo "Start Of the Week !";
                break;
            case "Friday":
                echo "Friday is my Weekend day ";
                break;
            default:
                echo "Just Normal day ";

        }

        echo "<br> =================== <br> ";

        //$marks = 44;

        if($marks<=100 && $marks >=90){
            echo "Grade A+ ";
        }else if ($marks<=89 && $marks >=80){
            echo "Grade A ";
        }else if ($marks<=79 && $marks >=70){
            echo "Grade B";
        }else if ($marks<=69 && $marks >=60){
            echo "Grade C";
        }else if ($marks<=59 && $marks >=50){
            echo "Grade A ";
        } else {
            "Your are a fild ,Try again ";
        }
        
        echo "<br> =================== <br> ";
        // Loops 

        //for loop 

        for ($n = 1 ; $n<=30; $n+=2){

            echo "Number : $n <br>";
        }

        $i= 1;

        while ($i <=10){
            echo "Count : $i <br>";
            $i++;
        }

        $i = 20;

        do{
            echo "Value : $i <br>";
            $i ++;
        }while ($i <= 5);
        

        // Foreach Loop

        $skillS=["HTML","CSS","JAVASCRIPT"];

        foreach ($skillS as $skill){
            echo "Skills : $skill <br>";
        }

        $personDetials=[
            "Name" => "Sabuj",
            "Age"  => 23,
            "Country" => "BD"
        ];
        
        foreach ($personDetials as $key => $value){
            echo "$key : $value <br> ";
        }
    ?>
</body>
</html>