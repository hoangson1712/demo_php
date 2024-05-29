<?php

    /**
     *      Variable = a reusable container that holds data
     *                 string, integer, float, boolean
     */

    $name = "Hoang Son";
    $food = "pizza";
    $email = "fake@gmail.com";

    $age = 25;
    $users = 2;
    $quantity = 4;

    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = true;
    $for_sale = true;

    $total = null;

    echo "You have ordered {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";

    // echo "Hello {$name}<br>";
    // echo "You like {$food}<br>";
    // echo "Your email is {$email}<br>";

    // echo "You are {$age} years old<br>";
    // echo "There are {$users} online<br>";
    // echo "You would like to buy {$quantity} items<br>";

    // echo "Your GPA is: {$gpa}<br>";
    // echo "Your pizza is \${$price}<br>";
    // echo "The sales tax rate is: {$tax_rate}%<br>";

    // echo "Online status: {$online}<br>";

?>