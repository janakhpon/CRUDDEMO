<?php

    include "connection.php";
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM `user` WHERE  username = '$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            header("Location:index.php?message=username+exists");
        }else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql2 = 
            "INSERT INTO `user` (`username`, `name`, `password`)
             VALUES('$username', '$name', '$hash');";

            

             if(mysqli_query($conn, $sql2)){
                header("Location:index.php?message=registration+success");
             }else{
                header("Location:index.php?message=registration+failed");
             }
        }
    }else{
        header("Location:index.php");
    }


?>