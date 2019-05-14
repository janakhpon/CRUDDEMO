<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body>
    

    <div class="container">

        <div class="container__item">



            <?php
                if(isset($_SESSION['id'])){
                    ?>
                    <a href="logout.php"><button  class="button">logout</button></a>
                    
                    <?php
                }else{
            ?>



            <form method="post" action="signup.php">
                <div class="row">
                    <label for="">username</label>
                    <input type="text" name="username" id="">
                </div>
                <div class="row">
                    <label for="">name</label>
                    <input type="text" name="name" id="">
                </div>
                <div class="row">
                    <label for="">password</label>
                    <input type="password" name="password" id="">
                </div>
                <div class="row">
                <input class="button" type="submit" name="submit">
                </div>
            </form>

            <?php
                }
            ?>
        </div>

        <div class="container__item">

        <?php 
        
                if(isset($_SESSION['id'])){

                    ?>
                    <h1>WELCOME</h1>
                    <?php
                }else{

                
        
        ?>

        <form method="post" action="signin.php">
                <div class="row">
                    <label for="">username</label>
                    <input type="text" name="username" id="">
                </div>
                <div class="row">
                    <label for="">password</label>
                    <input type="password" name="password" id="">
                </div>
                <div class="row">
                    <input class="button" type="submit" value="sign in" name="submit">
                </div>
            </form>


        <?php 
        
            }

        ?>

        </div>

    </div>


</body>
</html>