<?php
    /**
     *      Array = "Variable" which can hold  more than one value at a time
     */

    // $food_1 = "apple";
    // $food_2 = "orange";
    // $food_3 = "banana";
    // $food_4 = "coconut";

    $foods = array("apple","orange","banana","coconut");

    // $foods[0] = "pineapple";
    // array_push($foods,"pineapple","kiwi");
    // array_pop($foods);
    // array_shift($foods);
    // $foods = array_reverse($foods);
    // echo count($foods);

    foreach($foods as $food){
        echo $food . "<br>";
    }

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";
?>