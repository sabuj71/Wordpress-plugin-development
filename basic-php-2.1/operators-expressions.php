<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership System – Discount Calculator</title>
</head>
<body>

    <?php  

        //User Date

        $user_role ="admin";
        $is_logged_in = true;
        $has_referral = true;
        $cart_total = 1200;
        $coupon_code = null;


        // Determine base discount based on role

        $role_discount =($user_role === "admin")? 30:(($user_role === "member")? 15:0);

        // Referral bonus

        $referral_discount = ($has_referral && $user_role !=="guest")?5 :0 ;

        // Total Discount

        $total_discount =$role_discount + $referral_discount;

        // Apply discount to cart total 

        $discounted_price = $cart_total - ($cart_total * $total_discount / 100);

        // Final coupn

        $final_coupon = $coupon_code ?? "GET25";

        echo "<h3>Membership Discount Summery </h3>";
        echo " User Role : $user_role<br>";
        echo "Logged In : ".($is_logged_in ? "Yes" : "No") . "<br>";
        echo "Base Discount : $role_discount% <br>";
        echo "Referral Discount : $referral_discount% <br>";
        echo "Total Discount : $total_discount% <br>";
        echo "Cart Total : $ $cart_total <br> ";
        echo "Price After Discount : $ $discounted_price <br>";
        echo "Coupon Applied : $final_coupon";

       
    ?>
    
</body>
</html>