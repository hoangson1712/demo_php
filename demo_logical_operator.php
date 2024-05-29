<?php
    /**
     *      Logical Operators = Combine conditional statements
     *                          If(condition1 && condition2)
     * 
     *      && = True if both conditions are true
     *      || = True if at least one condition is true
     *       ! = True if false. False if true
     */
    
    // $temp = 15;
    // $cloudy = true;

    // if($temp < 0 || $temp > 30){
    //     echo "The weather is bad.<br>";
    // }else{
    //     echo "The weather is good.<br>";
    // }

    // if(!$cloudy){
    //     echo "It's sunny.";
    // }else{
    //     echo "It's cloudy.";
    // }

    // $age = 18;
    // $citizen = true;

    // if(!$age >= 18 || !$citizen){
    //     echo "You cannot vote";
    // }else{
    //     echo "You can vote";
    // }

    $child = true;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }else{
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";
?>