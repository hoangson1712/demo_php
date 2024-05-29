<?php
    /**
     *      1. MySQLi Extension
     *      2. PDO (PHP Data Objects)
     */

    include("database.php");

    // $username = "Patrick";
    // $password = "rock3";
    // $hash = password_hash($password,PASSWORD_DEFAULT);

    // $sql = "insert into users (user,password) values ('$username','$hash')";

    // try{
    //     mysqli_query($conn,$sql);
    //     echo "User is now registered";
    // }catch(mysqli_sql_exception){
    //     echo "Could not register user";
    // }

    $sql = "select * from users";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    }else{
        echo "No user found";
    }

    mysqli_close($conn);
?>