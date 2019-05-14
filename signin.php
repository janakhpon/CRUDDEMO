<?php

    session_start();
    include "connection.php";
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($username) OR empty($password)){
            header("Location:index.php?message=empty+fields");
            exit();
        }

        $sql = "SELECT * FROM `user` WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)<=0){
            header("Location:index.php?message=NotFound!");
        }else{
            while($row=mysqli_fetch_assoc($result)){
                if(!password_verify($password, $row['password'])){
                    header("Location:index.php?message=NotFound!");
                }else if(password_verify($password, $row['password'])){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['password'] = $row['password'];
                    header("Location:index.php?messge=LoginSucced!");
                }
            }
        }

    }else{
        header("Location:index.php");
    }


?>