<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removed Array</title>
</head>

<body>

    <?php 
    
        $name =["Sabuj","Ali","Farhan","Rakib","Shakil","Moni","Ratna"];
        
        echo"<pre>";
        var_dump($name);
        echo"</pre>";

        // removed array 

        array_splice($name,5 ,2,"Roni");
        echo"<pre>";
        var_dump($name);
        echo"</pre>";

        unset ($name[3]);
        echo"<pre>";
        var_dump($name);
        echo"</pre>";
        
        
        $cars =[ "brand" => "Toyta", "model" => "Mustang", "year" => 2018];

        echo"<pre>";
        var_dump(array_diff($cars,["Mustang",2018]));
        echo"</pre>";


        // removed the last item

        $name = array_pop($name);
        
        echo"<pre>";
        var_dump($name);
        echo"</pre>";

        //removed the fast item
        
        $cars= array_shift($cars);
        echo"<pre>";
        var_dump($cars);
        echo"</pre>";
        

    
    ?>
</body>

</html>