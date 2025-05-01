<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Delivery Charge Calculator</title>
</head>

<body>

    <?php
    
        //$city ="Khulna";
        // $city ="dhaka";
        //$city ="chittagong";
        $city ="narsingdi";
        $cart_total =1500;
        //$is_holiday = false;
        $is_holiday = true;
        $delivery_charge =0;
        
        //Special city-based delivery logic

        switch (strtolower($city)){
            case"dhaka":
            if($cart_total >= 800){
                $delivery_charge = 0;
            }elseif($cart_total >= 500){
                $delivery_charge =  30;
            }else{
                $delivery_charge = 50;
            }
            break;
            
            case "chittagong":
                if ($cart_total >= 1200){
                    $delivery_charge = 0;
                }else{
                    $delivery_charge = 100;
                }
            break;

            case "khulna":
                if($cart_total >= 1500){
                    $delivery_charge = 0;
                }else{
                    $delivery_charge = 120;
                }
            break;

            default:
                 $delivery_charge = 120;
            break;
        }

        // Extra condition on holiday

        if($is_holiday){
            $cart_total += 20;
        }

        // Print output

        echo "<h3>Delivery Charge Summary</h3>";
        echo " City : $city <br> ";
        echo " Cart Total : BDT $cart_total <br>";
        echo " Holiday :" .($is_holiday?"Yes":"No")."<br>";
        echo " Delivery Charge : BDT $delivery_charge <br> ";

        if($city === "other"  || $delivery_charge >= 100){
            echo "<strong>Note : </strong> Remote area or holiday surcharge applied <br>";
        }
    
    ?>

</body>

</html>