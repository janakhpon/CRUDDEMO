<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post">
    
    <div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    </div>

    <div>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    </div>


    <div>
    <label for="address">Address</label>
    <input type="text" name="address" id="address">
    </div>



    <div>
    <input type="submit" name="submit">
    </div>

    </form>

    <?php
    include "connection.php";   
    /* There we go */

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];




        /* INSERT DATA INTO TABLE */
        $sql = "INSERT INTO `info` (`name`, `email`, `address`) VALUES ('$name', '$email', '$address');";

       
        
       if( mysqli_query($conn, $sql)){
        echo "<script type='text/javascript'>";
        echo "alert('sucess!');";
        echo "</script>";

       };

    }


    ?>
</body>
</html>