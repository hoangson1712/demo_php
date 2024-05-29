<?php
    // $username = "Hoang Son";
    $username = array("Hoang","Son");
    $phone = "123-456-7890";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username,20,"0");
    // $phone = str_replace("-","/",$phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username,"Hoang Son");
    // $count = strlen($username);
    // $index = strpos($username," ");
    // $firstname = substr($username,0,5);
    // $lastname = substr($username,6);
    // $fullname = explode(" ",$username);
    $username = implode("-",$username);

    // foreach($fullname as $name){
    //     echo $name . "<br>";
    // }

    echo $username;
?>